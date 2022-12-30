<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
  background-color: #ffe44d;
}

#container {
  width: 100%;
  height: 100%;
  padding: 10px;
}

#edit {
  padding: 5px;
  outline: none;
}

button {
  width: 80px;
  padding: 5px;
  margin: 0 3px;
  background-color: #ff7e00;
  outline: none;
  border: 1px solid #ff7e00;
  box-shadow: 2px 2px 2px #3f3f3f;
}

button:hover {
  box-shadow: 2px 2px 3px ;
}

button:active {
  box-shadow: 1px 1px 3px ;
} 
    
    </style>


</head>
<body>



<div id="container">
  <p id="edit"><b> Click "Edit" button to edit content. </b></p>
  <button type="submit" id="edit-button">Edit</button>
  <button type="submit" id="end-editing">Done</button>
</div>


<script>

const paragraph = document.getElementById("edit");
const edit_button = document.getElementById("edit-button");
const end_button = document.getElementById("end-editing");

edit_button.addEventListener("click", function() {
  paragraph.contentEditable = true;
  paragraph.style.backgroundColor = "#dddbdb";
} );

end_button.addEventListener("click", function() {
  paragraph.contentEditable = false;
  paragraph.style.backgroundColor = "#ffe44d";
} )
    </script>
  


    
</body>
</html>