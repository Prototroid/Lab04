// https://www.w3schools.com/howto/howto_js_display_checkbox_text.asp
// Check to see if string includes a character:	https://www.w3schools.com/jsref/jsref_includes.asp
// https://stackoverflow.com/questions/21127083/js-validation-highlight-input-field-red-green
//

//// Global variables ////
let check1Checked = false, check2Checked = false, check3Checked = false;
let loginVal = false;
let productVal = false;

//// Display quantity ////
function displayQuantity(num)
{
    let check1, check2, check3;
    let quantityText1, quantityText2, quantityText3;

    //// Checkbox 1 ////
    if(num == 1)
    {
        check1 = document.getElementById("p1");
        quantityText1 = document.getElementById("t1");

        if (check1.checked == true)
        {
            check1Checked = true;
            quantityText1.style.display = "block";
        }
        else
        {
            check1Checked = false;
            quantityText1.style.display = "none";
        }               
    }

    //// Checkbox 2 ////
    if(num == 2)
    {
        check2 = document.getElementById("p2");
        quantityText2 = document.getElementById("t2");

        if (check2.checked == true)
        {
            check2Checked = true;
            quantityText2.style.display = "block";
        }
        else
        {
            check2Checked = false;
            quantityText2.style.display = "none";
        } 
    }

    //// Checkbox 3 ////
    if(num == 3)
    {
        check3 = document.getElementById("p3");
        quantityText3 = document.getElementById("t3");

        if (check3.checked == true)
        {
            check3Checked = true;
            quantityText3.style.display = "block";
        }
        else
        {
            check3Checked = false;
            quantityText3.style.display = "none";
        } 
    }
}


//// Login validation ////
function userLogin()
{
    let valid = false;

    let u = document.getElementById("user").value;
    console.log("Username: " + u);
    let p = document.getElementById("pass").value;
    console.log("Password: " + p);

    //// Username validation ////
    if(u == "")
    {
        alert('ERROR: Username cannot be empty!');
        document.getElementById("user").style.borderColor = "red";
        return false;
    }
    else if(u.includes(" "))
    {
        alert('ERROR: Username cannot contain spaces!');
        document.getElementById("user").style.borderColor = "red";
        return false;
    }
    else if(!(u.includes("@") && u.includes(".")))
    {
        alert('ERROR: Username must be in the form of an email address!');
        document.getElementById("user").style.borderColor = "red";
        return false;
    }
    else
    {
        console.log("Username valid!");
        document.getElementById("user").style.borderColor = "green";
        valid = true;
    }

    //// Password validation ////
    if(p == "")
    {
        alert('ERROR: Password cannot be empty!');
        document.getElementById("pass").style.borderColor = "red";
        valid = false;
    }
    else if(p.includes(" "))
    {
        alert('ERROR: password cannot contain spaces!');
        document.getElementById("pass").style.borderColor = "red";
        valid = false;
    }
    else
    {
        console.log("Password valid!");
        alert('Username and password are valid, thank you!');
        document.getElementById("pass").style.borderColor = "green";
        valid = true;
        loginVal = true;
    }

    return valid;
}

//// Product submission validation ////
function submitProduct()
{
    // userLogin();

    let valid = false;

    let q1, q2, q3;
    
    //// Sees if any product was selected ////
    if(!(check1Checked || check2Checked || check3Checked))
    {
        alert('NO PRODUCT: Please select a computer part before proceeding!');
        return false;
    }

    //// Product 1 ////
    if(check1Checked == true)
    {
        q1 = document.getElementById("q1").value;
        console.log("Quantity 1: " + q1);

        if(q1 == "")
        {
            alert('ERROR: Quantity 1 cannot be empty!');
            document.getElementById("q1").style.borderColor = "red";
            return false;
        }
        else if(q1.includes(" "))
        {
            alert('ERROR: Quantity 1 cannot contain spaces!');
            document.getElementById("q1").style.borderColor = "red";
            return false;
        }
        else if(q1 < 0)
        {
            alert('ERROR: Quantity 1 cannot be negative!');
            document.getElementById("q1").style.borderColor = "red";
            return false;
        }
        else
        {
            console.log("Quantity 1 valid!");
            document.getElementById("q1").style.borderColor = "green";
            valid = true;
        }
    }
    
    //// Product 2 ////
    if(check2Checked == true)
    {
        q2 = document.getElementById("q2").value;
        console.log("Quantity 2: " + q2);

        if(q2 == "")
        {
            alert('ERROR: Quantity 2 cannot be empty!');
            document.getElementById("q2").style.borderColor = "red";
            return false;
        }
        else if(q2.includes(" "))
        {
            alert('ERROR: Quantity 2 cannot contain spaces!');
            document.getElementById("q2").style.borderColor = "red";
            return false;
        }
        else if(q2 < 0)
        {
            alert('ERROR: Quantity 2 cannot be negative!');
            document.getElementById("q2").style.borderColor = "red";
            return false;
        }
        else
        {
            console.log("Quantity 2 valid!");
            document.getElementById("q2").style.borderColor = "green";
            valid = true;
        }
    }

    //// Product 3 ////
    if(check3Checked == true)
    {
        q3 = document.getElementById("q3").value;
        console.log("Quantity 3: " + q3);

        if(q3 == "")
        {
            alert('ERROR: Quantity 3 cannot be empty!');
            document.getElementById("q3").style.borderColor = "red";
            return false;
        }
        else if(q3.includes(" "))
        {
            alert('ERROR: Quantity 3 cannot contain spaces!');
            document.getElementById("q3").style.borderColor = "red";
            return false;
        }
        else if(q3 < 0)
        {
            alert('ERROR: Quantity 3 cannot be negative!');
            document.getElementById("q3").style.borderColor = "red";
            return false;
        }
        else
        {
            console.log("Quantity 3 valid!");
            document.getElementById("q3").style.borderColor = "green";
            valid = true;
        }
    }

    //// Shipping ////
        let s1 = document.getElementById("s1");
        let s2 = document.getElementById("s2");
        let s3 = document.getElementById("s3");

        if(!(s1.checked || s2.checked || s3.checked))
        {
            alert('NO Shipping: A shipping option must be selected!');
            return false;
        }
        else
        {
            console.log("Shipping valid!");
            valid = true;
        }

    productVal = true;
    return valid;
}

function noRedirect()
{
    if(loginVal == true)
    {
        console.log("Login Successful!");
    }
    if(productVal == true)
    {
        console.log("Product Submission Successful!");
    }
    if(loginVal && productVal)
    {
        window.location = "customerBackend.php";
    }
}

//// Reset ////
function resetPage()
{
    window.location.href = "customerFrontend.html";
}