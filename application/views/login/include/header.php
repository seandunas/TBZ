<html>
    <head>
        <title> TBZ | <?=$title?></title>
        
    </head>

    <!-- scripts -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

  body {
    /* background-image: url("https://i1.wp.com/i.pinimg.com/originals/c8/9e/fc/c89efc04c3a4bf23d6ff72a3050b9731.jpg"); */
    background: rgb(238,174,202);
    background: linear-gradient(90deg, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
    background-position: center;
    /* background-repeat: no-repeat;
    background-size: cover;
    height: 100%; */
    font-weight: 300;
    padding-left: 250px;
    padding-right: 300px;
    padding-top: 50px;
    padding-bottom: 50px;
  }

  h1 {
    font-weight: 400;
    font-size: 2.5em;
    text-align: center;
    margin-top: 5rem;
  }

  a.style {
    text-decoration: none;
    color: #84a6d6;
  }

  a.style:hover {
    color: black;
    background-color: transparent;
    text-decoration: underline;
  }

  p{
    font-family: 'Lucida Console';
    font-size: 15px;
    font-weight: bold;
    color: black;
  }

  p1{
    font-family: 'Lucida Console';
    font-size: 15px;
    color: black;
  }

  p3{
    font-family: 'Lucida Console';
    font-size: 12px;
    font-weight: bold;
    color: black;
  }

  h2 {
    margin-top: 10px;
    font-family: 'Chewy', cursive;
    font-size: 40px;
  }

  /* Nav tabs*/
  #container {
    padding-left: 220px;
    padding-right: 220px;
    padding-top: 50px;
    padding-bottom: 100px;
    width: 60%;
  }

  .tabs-nav ul {
    margin: 0;
    padding: 0;
    text-align: center;
  }

  .tabs-nav li {
    background: rgba(0, 0, 0, 0.78);
    color: white;
    border-width: 1px 1px 0 1px;
    border-style: solid;
    border-color: #34495E;
    margin-right: 0px;
    float: none !important;
    display: inline-block;
    width: 49%;
    height: 50px;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
    text-align: center;
    font-family: 'Chewy', cursive;
    font-size: 20px;
  }

  .tabs-nav a {
    display: block;
    padding: 10px 15px;
    font-weight: bold;
    color: #fff;
    text-decoration: none;
  }
  
  /* Active tab */
  .tabs-nav li.active {
    background: #4382bb;
    color: white;
  }

  .tabs-nav li.active a {
    color: inherit;
  }

  /* Tab content */
  .tabs-content {
    padding: 10px;
    background: #ddf2f4;
    margin-top: -1px;
    overflow: hidden;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.5), 0 6px 20px 0 rgba(0,0,0,0.5);
  }

  .tabs-content div:not(:first-child) {
    display: none;
  }

  input[type=text] {
    width: 70%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border-radius: 8px;
    font-size: 16px;
    width: 90%;
  }

  input[type=date] {
    width: 70%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border-radius: 8px;
    font-size: 16px;
    width: 90%;
  }
  
  input[type=file] {
    width: 70%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border-radius: 8px;
    font-size: 16px;
    width: 90%;
  }

  input[type=password] {
    width: 70%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border-radius: 8px;
    font-size: 16px;
    width: 90%;
  }

  input[type="file"]::file-selector-button {
    width: 40%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border-radius: 8px;
    font-size: 16px;
    color: white;
    background-color: rgba(0, 0, 0, 0.78);
    font-family: 'Lucida Console';
    font-weight: bold;
  }

  input[type="file"]::file-selector-button:hover {
    width: 40%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border-radius: 8px;
    font-size: 16px;
    color: rgba(0, 0, 0, 0.78);
    background-color: #4382bb;
  }

  .custom-file-upload {
    width: 70%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border-radius: 8px;
    font-size: 16px;
    width: 90%;

    font-family: 'Lucida Console';
    font-size: 15px;
    font-weight: bold;
    color: black;
    background-color: white;
  
    border: 2px solid #000;
    display: inline-block;
    cursor: pointer;
  }

  input[type="submit"] {
    width: 70%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border-radius: 8px;
    font-size: 16px;
    width: 90%;
    color: white;
    background-color: rgba(0, 0, 0, 0.78);
    font-family: 'Lucida Console';
    font-weight: bold;
  }

  button[type="text"] {
    width: 70%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border-radius: 8px;
    font-size: 16px;
    width: 90%;
  }

  button[type="text"]:hover {
    width: 70%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border-radius: 8px;
    font-size: 16px;
    width: 90%;
    color: rgba(0, 0, 0, 0.78);
    background-color: #7FFFD4;
  }

  button[type="submit"] {
    width: 70%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border-radius: 8px;
    font-size: 16px;
    width: 90%;
    color: white;
    background-color: rgba(0, 0, 0, 0.78);
    font-family: 'Lucida Console';
    font-weight: bold;
  }

  button[type="submit"]:hover {
    width: 70%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border-radius: 8px;
    font-size: 16px;
    width: 90%;
    color: rgba(0, 0, 0, 0.78);
    background-color: #4382bb;
  }

  ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
    font-family: 'Lucida Console';
    font-size: 15px;
    font-weight: bold;
    color: black;
  }

  div {
    border-radius: 5px;
    padding: 20px;
  }

  #warning{
    color:  red;
  }
</style>
    
    <body>
