function doFilter (form)
{
        var ampAnd ;
       	var dot;
	var  getName  = document.getElementById("name").value;
	var  getEmail = document.getElementById("email").value;
        var  getMsg   = document.getElementById("msgText").value; 
        var  illegalCharMessage = "[()<>;|:+=\/[]#";
        var  illegalChar = /[\(\)\<\>\;\|\:\+\=\\\/\[\]\#]/      
        var alertCharsMsg = "contains one or more of the below illegal " + 
           "characters. Please remove and try re-sending the message.\n " +
           "\nIllegal Characters: " + illegalCharMessage;
      var alphaNumChar = "[a-zA-Z_0-9]+$";
        
	if ( getName.match(illegalChar) )
	{
		alert("The name " + alertCharsMsg  );
		return false;
	}
  	      
   	if(getEmail == "" || getEmail == null)
   	{
		alert("Please enter your email address");
   		return false;
   	}
	else
 	{

       ampAnd = getEmail.indexOf("@");
       dot = getEmail.lastIndexOf(".");
		
       if ( getEmail.match(illegalChar) )
	   {
			alert("The email address " + alertCharsMsg );
			return false;
	   }

	   if (ampAnd < 1) 
 	   {
			alert("Please add an at symbol '@' to the email address");
			return false;	
	   }
		
 	   if (dot < 1)
       {
			alert("Please add a dot '.' to the email address.");
			return false;
	   }
 }               

	  	if(getMsg.length == 0 || getMsg == " ")
     	{
		    alert("You have not entered any text into the message field");
      		return false;
    	}
          
          
		if ( getMsg.match(illegalChar) )
		{
			alert("The message " + alertCharsMsg  );
			return false;
		}
		
  
    if(getMsg.length <= 3  )
    {
       alert("Please enter a message with more than three characters.");
       return false;
    }
   
    if(getMsg.length >= 3 && getMsg.search(alphaNumChar) == -1)
    {
       alert("Please enter a message with alphabetic and/or numeric characters.");
       return false;
    }
	

}

