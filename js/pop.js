function popup(y)
 {

             var name=prompt("Please enter your friends name","");
             var id=prompt("Please enter your friends Email ID","");
             var Url="1.php";


           if (window.XMLHttpRequest) {

      xmlhttp=new XMLHttpRequest()
      }
        else if (window.ActiveXObject) {

     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP")   // For (older) IE
  }
     Url=Url+"?q="+escape(name)+"&s="+escape(id)+"&p="+escape(y);  // "&NoCache"  => Append the timestamp to avoid cashing
				                       // Also escape the input argument  (Arg) to properly url-encode the characters (to be sure)

     xmlhttp.open("GET", Url, true);                                                         //  (httpMethod,  URL,  asynchronous)

    // xmlhttp.overrideMimeType('text/xml');

     xmlhttp.send(null);
               }
