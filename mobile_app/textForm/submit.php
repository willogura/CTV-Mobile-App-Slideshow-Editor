<?php
// Saving data from form in text file in JSON format
// From: http://coursesweb.net/php-mysql/


// check if all form data are submited, else output error message

    // adds form data into an array
   





    $formdata1 = array(
      'title'=> $_POST['title'],
      'image'=> $_POST['imageTitle'],
      'category' => $_POST['category'],
      'slideType'=> $_POST['type'],
      'publish'=> $_POST['publish']
    );
 
 
 




 
 
 $formdata = array('slides' => array($formdata1));
 

 

    // encodes the array into a string in JSON format (JSON_PRETTY_PRINT - uses whitespace in json-string, for human readable)
    $jsondata = json_encode($data, JSON_PRETTY_PRINT);

    // saves the json string in "formdata.txt" (in "dirdata" folder)
    // outputs error message if data cannot be saved
    if(file_put_contents('/home/tschultz/public_html/mobile_app/textForm/formdata.txt', $_POST)) echo 'JSON Data successfully saved';
  
  
  
  
 


?>