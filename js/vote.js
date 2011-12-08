
 function increase(y)
 {
              var Url="updatevote.php"
 var nam=document.getElementById(y).innerHTML;

         var vote=nam;
         vote++;

         document.getElementById(y).innerHTML = vote;
           if (window.XMLHttpRequest) {

      xmlhttp=new XMLHttpRequest()
      }
        else if (window.ActiveXObject) {

     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP")   // For (older) IE

  }



   Url=Url+"?q="+escape(y)+"&s="+escape(vote);  // "&NoCache"  => Append the timestamp to avoid cashing
						                       // Also escape the input argument  (Arg) to properly url-encode the characters (to be sure)

     xmlhttp.open("GET", Url, true);                                                         //  (httpMethod,  URL,  asynchronous)

    // xmlhttp.overrideMimeType('text/xml');

     xmlhttp.send(null);


}

 function decrease(y)
 {

                  var Url="updatevote.php"
 var nam=document.getElementById(y).innerHTML;

         var vote=nam;
         vote--;

         document.getElementById(y).innerHTML = vote;
           if (window.XMLHttpRequest) {

      xmlhttp=new XMLHttpRequest()
      }
        else if (window.ActiveXObject) {

     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP")   // For (older) IE

  }



   Url=Url+"?q="+escape(y)+"&s="+escape(vote);  // "&NoCache"  => Append the timestamp to avoid cashing
						                       // Also escape the input argument  (Arg) to properly url-encode the characters (to be sure)

     xmlhttp.open("GET", Url, true);                                                         //  (httpMethod,  URL,  asynchronous)

    // xmlhttp.overrideMimeType('text/xml');

     xmlhttp.send(null);



}

