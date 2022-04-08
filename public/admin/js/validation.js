function stringlength(inputText, minlength, maxlength,msg)
              {
  var field = inputText.value;
  var mnlen = minlength;
  var mxlen = maxlength;
  var Errspan = inputText.name + 'Error';
  if (field.length < mnlen || field.length > mxlen)
  {
    document.getElementById(Errspan).innerHTML ="<i class='ion ion-information-circled error-icon'></i>  "+ msg ;
    return false;
  } else
  {
    document.getElementById(Errspan).innerHTML='';
    return true;
  }
}

function preventSpace(inputText, minSpace, maxSpace,msg,w)
             {
  var field = inputText.value;
  var mnChar = minSpace;
  var mxChar = maxSpace;
  var Errspan = inputText.name + 'Error';

  if (field.split(' ').length - 1 >= 1 && mnChar == 0)
   {
    document.getElementById(Errspan).innerHTML ="<i class='ion ion-information-circled  error-icon'></i>  "+ msg ;
    return false;
  } else if (field.split(' ').length - 1 < mnChar || field.split(' ').length - 1 > mxChar)
  {
    document.getElementById(Errspan).innerHTML ="<i class='ion ion-information-circled  error-icon'></i>  "+ msg + mnChar + ' , ' + mxChar + ' '+ w;
    return false;
  } else
  {
    document.getElementById(Errspan).innerHTML='';
    return true;
  }
}

function allLetter(inputText)
              {
  var letters = /^[A-Za-z]+$/;
  var Errspan = inputText.name + 'Error';

  if (inputText.value.match(letters))
  {
    document.getElementById(Errspan).innerHTML='';
      return true;
  } else
  {
    document.getElementById(Errspan).innerHTML ="<i class='ion ion-information-circled  error-icon'></i>  "+ msg ;

      return false;
  }
}

                function Requirevalidation(inputText,msg)
                {

  var empt =inputText.value;
  var Errspan = inputText.name + 'Error';

  if (empt == '')
  {
      document.getElementById(Errspan).innerHTML ="<i class='ion ion-information-circled  error-icon'></i>  "+  msg;
      return false;
  } else
  {
    document.getElementById(Errspan).innerHTML='';
      return true;
  }


                }
   function ValidateEmail(inputText,msg)
                {
                var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                var Errspan = inputText.name + 'Error';


                if(inputText.value.match(mailformat))
                {
                  document.getElementById(Errspan).innerHTML='';
                  return true;
                }
                else
                {
                    document.getElementById(Errspan).innerHTML="<i class='ion ion-information-circled  error-icon'></i>  "+msg;
                    return false;
                }
                }
    function phonenumber(inputText)
                {
                  var Errspan=inputText.name+'Error';

                  var phoneno =/^\+(?:[0-9] ?){6,14}[0-9]$/;
                  if(inputText.value.match(phoneno))
                     {
                      document.getElementById(Errspan).innerHTML='';

                     return true;
                   }
                   else
                     {
                      document.getElementById(Errspan).innerHTML="<i class='ion ion-information-circled  error-icon'></i>  "+ msg;
                      return false;
                     }
                }
  

   function confirmPassValidation(cpass,opass,msg){

                    var Errspan=cpass.name+'Error';
                    var pass =opass.value.slice(0,cpass.value.length);

                    if (cpass.value!=pass) {
                        document.getElementById(Errspan).innerHTML="<i class='ion ion-information-circled  error-icon'></i>  "+ msg;
                        return false;
                    }
                    else
                    {
                      document.getElementById(Errspan).innerHTML='';
                         return true;
                    }
				}
function validateDate(inputText){
  var Errspan=inputText.name+'Error';

  var CurrentDate = new Date();
  var GivenDate = new Date(inputText.value);
  
      if(GivenDate < CurrentDate){ 
              document.getElementById(Errspan).innerHTML="<i class='ion ion-information-circled  error-icon'></i>  "+ msg ;
              return false;
          }
          else
          {
            document.getElementById(Errspan).innerHTML='';
               return true;
          }
}
