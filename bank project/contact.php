<html>
<head>
    <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LEO BANK</title>
   <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style type="text/css">
  *{
    margin:0;
    padding:0;
    box-sizing:border-box;
}
.big-text
{
   
    margin:20px 0;
    color:white;
    font-family: 'JetBrains Mono', monospace;
}
.contactus{
    width:100%;
    height: 100vh;
    padding: 80px 0;
    position: relative;
}
.contactus:before{
    content:"";
    position: absolute;
    top:0;
    left:0;
    bottom: 0;
    right:0;
    background:linear-gradient(20deg,#5E11A3 55%, #fff 0%);
    z-index: -1;
}
.formbutton button{
    border:1px solid #50d1c0;
    border-radius:100px;
    margin:0 50px;
    padding: 12px 35px;
    outline:none;
    columns: #50d1c0;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.4;
    text-align: center;
    background:transparent;
    color:#fff;
   
}
form:hover .formbutton button{
background: white;
color:#5E11A3 ;
box-shadow: 0 0 20px 0 rgba(0,0,0,0.3);
}
</style>
</head>

<body>
<section class="contactus" id="contact" >
        <div class="container headings text-center">
            <h1 class="center" style="font-weight: bold;text-align: center;">CONTACT US</h1>
            <p>We're Here To Help And Answer Any Questions You Might Have.We Look Forward To Hearing From You</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-10 offset-lg-2 offet-md-2-col col-1">
                    <form action="/action_page.php">
                        <div class="form-group">
                          
                          <input type="text" class="form-control" placeholder="Enter name" id="username" required autocomplete="off">
                        </div>
                        <form action="/action_page.php">
                            <div class="form-group">
                              
                              <input type="email" class="form-control" placeholder="Enter email" id="email" required autocomplete="off">
                            </div>
                            <form action="/action_page.php">
                                <div class="form-group">
                                  
                                  <input type="number" class="form-control" placeholder="Enter mobile number" id="mobile" required autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="comment">Comment:</label>
                                    <textarea class="form-control" rows="4" id="comment" placeholder="Your Comments"></textarea>
                                  </div>
                                  <div class="formbutton" style="display: flex;justify-content: center;">
                        <button type="submit" >Submit</button></div>
                      </form>
                </div>
            </div>
        </div>
       </section>
</body>
</html>