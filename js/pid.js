 function pidup(y)
 {

  var Url="updatepid.php"


             if (window.XMLHttpRequest) {

      xmlhttp=new XMLHttpRequest()
      }
        else if (window.ActiveXObject) {

     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP")   // For (older) IE

  }



   Url=Url+"?q="+escape(y);  // "&NoCache"  => Append the timestamp to avoid cashing
						                       // Also escape the input argument  (Arg) to properly url-encode the characters (to be sure)

     xmlhttp.open("GET", Url, true);                                                         //  (httpMethod,  URL,  asynchronous)


     xmlhttp.send(null);


  }
