<?php
// function abebe() {
//     echo "I am here";
// }

// Clean up data being enetred
function cleanUp($data) {
    // A good article on how to sanitize user input 

    // https://dev.to/anastasionico/good-practices-how-to-sanitize-validate-and-escape-in-php-3-methods-139b

    // htmlspecialchars()
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    $data = trim($data);
    return $data;
}


// Register user 
function registerUser($fname, $lname, $email, $password) {
    global $sqlConnect; // globally available var  
    // Clean and escape input
    $ffname = cleanUp($fname);
    $lname = cleanUp($lname);
    $email = cleanUp($email);
    $password = md5($password); // md5 convert special characters to hash
    $joined_date = date("Y-m-d H:i:s");
    $Hash = md5($email);

    // SQL query with correct variable reference
    $query_text = "INSERT INTO Users (fName, lName, email, pass, joined_date, uHash)  VALUES ('$ffname', '$lname', '$email', '$password', '$joined_date', '$Hash')";

    // Execute the query
    $query = mysqli_query($sqlConnect, $query_text); 

    // Handle if there is error
    if($query) {
        // if there is anything you want to do after the user is registered 
        echo "Successfully registered";
    } else {
        // Handle error here 
        echo "Error: " . mysqli_error($sqlConnect);
    }
}



// Log in user 
function loginUser($email, $password) {
   global $sqlConnect;
   // Clean and escape input
   $email = cleanUp($email);
   $password = md5($password);

   // Arry to collect the returned data
   $fetched_data = array();
   
   // Run the query to check user info exists and matches 
   $query_text = "SELECT * FROM Users WHERE email = '$email' AND pass = '$password' ";

   // Execute the query
   $query = mysqli_query($sqlConnect, $query_text); 

   if($query) {
       while($row = mysqli_fetch_assoc($query)) {
           $fetched_data = $row;
       }
   }

   return  $fetched_data;
}

// Add topic 
function addTopic($topicName) {
  global $sqlConnect;  
  // Clean and escape input
  $topicName = cleanUp($topicName);  
  $topicName = mysqli_real_escape_string($sqlConnect, $topicName);  // Escaping the input

  // Insert data
  $query_text = "INSERT INTO Topics (topicName) VALUES ('$topicName')"; 

  // Execute the query
  $query = mysqli_query($sqlConnect, $query_text); 

  // Check if the query was successful
  if ($query) {
    return true;  // Success
  } else {
    return false;  // Error
  }
}


// Get topics
function getTopics() {
  global $sqlConnect;
  $fetched_data = array();  // Fixed typo "fetchd_data" to "fetched_data"

  $query_text = "SELECT * FROM Topics";  // Fixed typo "SE:ECT" to "SELECT"
  $query =  mysqli_query($sqlConnect, $query_text);
  
  if($query) {
    while($row = mysqli_fetch_assoc($query)) {
        $fetched_data[] = $row;  // Collect all rows in an array
    }
  }
  
  return $fetched_data;  // Return the data
}


// Get user info from the uhash 
// user info from user hash
function getUserInfoFromHash($userHash) {
    global $sqlConnect;
    $userHash = cleanUP($userHash);

    $fetched_data = array();

    $query_text = "SELECT * FROM Users WHERE uHash = '$userHash' ";
    $query = mysqli_query($sqlConnect, $query_text);

    if($query) {
        while($row =  mysqli_fetch_assoc($query)) {
            $fetched_data = $row;
        }
    }
return $fetched_data;

}

// Add Question to DB 
function addQuestion($uid, $tid, $question, $explanation) {
    global $sqlConnect;
    $uid = cleanUp($uid);
    $tid = cleanUp($tid);
    $question = cleanUp($question);
    $explanation = cleanUp($explanation);
    $askedDate = date("Y-m-d H:i:s");
    $qHash = md5($question . $askedDate);

    // INSERT Data
    $query_text = "INSERT INTO Question (uid, tid, question, explanation, askedDate, qHash) 
                   VALUES ($uid, $tid, '$question', '$explanation', '$askedDate', '$qHash')";  // Corrected the SQL query

    $query = mysqli_query($sqlConnect, $query_text);

    // Handle if there is error
    if ($query) {
        // Success logic if needed
    } else {
        // Handle error
        echo "Error: " . mysqli_error($sqlConnect);
    }
}


// Get Questions
function getQuestions($limit) {
    global $sqlConnect;
    $limit = cleanUp($limit);  // Assuming cleanUp() is a function to sanitize the input

    $fetched_data = array();

    // Use mysqli_query instead of mysqli_qquery
    $query_text = "SELECT * FROM Question LIMIT $limit";

    // Run the query
    $query = mysqli_query($sqlConnect, $query_text);

    // Check if the query was successful
    if($query) {
        while($row = mysqli_fetch_assoc($query)) {  // Correct the syntax here
            $fetched_data[] = $row;
        }
    }

    // Return the fetched data
    return $fetched_data;
}



?>