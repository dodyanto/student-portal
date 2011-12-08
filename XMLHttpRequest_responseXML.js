
var xmlhttp


function SendData(Arg) { 

    xmlhttp=null;

    var Url="XMLHttpRequest_responseXML.php"           // THE SERVER SCRIPT TO HANDLE THE REQUEST 


  if (window.XMLHttpRequest) {

      xmlhttp=new XMLHttpRequest()                            // For all modern browsers

  } else if (window.ActiveXObject) {

     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP")   // For (older) IE

  }


 if (xmlhttp!=null)  {

     xmlhttp.onreadystatechange=onStateChange;
  
     Url=Url+"?name="+escape(Arg)  // "&NoCache"  => Append the timestamp to avoid cashing
						                       // Also escape the input argument  (Arg) to properly url-encode the characters (to be sure)

     xmlhttp.open("GET", Url, true);                                                         //  (httpMethod,  URL,  asynchronous)
 
    // xmlhttp.overrideMimeType('text/xml');

     xmlhttp.send(null);


/* 
   // How to send a POST request
    xmlhttp.open("POST", Url, true);                                                         //  (httpMethod,  URL,  asynchronous)

    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");

     xmlhttp.send( "Date=" + escape(Arg) );
*/


  } else {

     alert("The XMLHttpRequest not supported");

  }

}





function  onStateChange()  {


  if (xmlhttp.readyState==4) {                                                                                      // 4 => loaded complete


       if (xmlhttp.status==200) {                                                                                    // HTTP status code  ( 200 => OK )

            var xmlDoc=xmlhttp.responseXML                                                                    // "xmlDoc" the returned xml object


            // alert(typeof xmlhttp.responseXML)                                                               // Returns: object
           // alert ("childNodes: "+xmlDoc.childNodes.length)                                             // Just for test

           var DateNode=xmlDoc.getElementsByTagName('name')[0].firstChild.nodeValue      // The <Date> element's node value  (the sent date)
var DateNode1=xmlDoc.getElementsByTagName('phone')[0].firstChild.nodeValue
var DateNode2=xmlDoc.getElementsByTagName('college')[0].firstChild.nodeValue
var DateNode3=xmlDoc.getElementsByTagName('dept')[0].firstChild.nodeValue
var DateNode4=xmlDoc.getElementsByTagName('photo')[0].firstChild.nodeValue
var DateNode5=xmlDoc.getElementsByTagName('email')[0].firstChild.nodeValue
var DateNode6=xmlDoc.getElementsByTagName('noq')[0].firstChild.nodeValue


            var Xml2String                                                                                             // Convert the xml to string just to display it

            if (xmlDoc.xml) {
                Xml2String=xmlDoc.xml                                                                            // Converts the xml object to string  (  For IE)
            }else{
                Xml2String= new XMLSerializer().serializeToString(xmlDoc);                        // Converts the xml object to string (For rest browsers, mozilla, etc)
            }






            document.getElementById("name").value=DateNode
            document.getElementById("phone").value=DateNode1
            document.getElementById("coll").value=DateNode2
            document.getElementById("dept").value=DateNode3
            document.getElementById("email").value=DateNode5
            document.getElementById("noq").value=DateNode6
                var o=document.getElementById("ph")
                o.src=DateNode4

      } else {

                alert("statusText: " + xmlhttp.statusText + "\nHTTP status code: " + xmlhttp.status);

      }  // End of:   if (xmlhttp.status==200)

  }

}
