<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css">
        *{margin: 0; padding: 0; font-family: 'Muli',sans-serif; box-sizing: border-box; }

        /* registration form begins */
        *{margin: 0; box-sizing: border-box; padding: 0; font-family: 'Popins',sans-serif;}
        .man-div{
            width: 100%; height: 100vh;
            /* background-color: #B3E5FC */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: black;
        }
        .sesion{
            margin-left: 80%;
        }

        .center-div{
    width: 90%;
    height: 80vh;
    margin: auto;
    margin-top: 5%;
    /* background-color: #E1F5FE */
    background: -webkit-linear-gradient(left, #5DADE2, #00C6ff);
    padding: 20px 0 0 0;
    box-shadow: 0 10px 20px 0 rgba(0, 0, 0, .03);
    border-radius: 10px;
    /* align-items: center */
       }
       .center-div h1{
           padding-top: 10px;
       }
        h1{
            font-size: 18px;
            color: #000;
            text-align: center;
            margin-top: -20px;
            margin-bottom: 20px;
        }
        table{
            /* border-spacing: 5; */
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 10px 20px 0 rgba(0, 0, 0, .03);
            border-radius: 10px;
            margin: auto;
        }

        th,td{
            border: 1px solid #f2f2f2;
            padding: 8px 30px;
            text-align: center;
            color: grey;
        }

        th{
            text-transform: uppercase;
            font-weight: 500;
        }

        td{
            font-size: 13px;
        }

        .email-style{
            font-size: 14px;
            color: grey;
            display: inline-block;
            background: #f2f2f2;
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
            line-height: 30px;
            padding: 0 14px;
        }

        .post-class{
            text-transform: uppercase;
        }

        .fa{
            font-size: 18px;
        }

        .fa-edit{color: #63c76a}
        .fa-trash{color: #ff0000}
        a{text-decoration: none; display: flex; justify-content: center; text-align: center;}

        /* INSERT PAGE */

        .form-for-applicant{
            margin-top: 15%;
            padding-top:2%;
            padding-bottom: 5%;
        }

        .register{
            background: -webkit-linear-gradient(left, #3931af, #00cbff);
            margin-top: 3%;
            padding: 3%;
            box-shadow: 0 10px 20px 0 rgba(0, 0, 0, .03);
        }

        .register-left{
            text-align: center;
            color: #fff;
            margin-top: 4%;
        }

        .register-left a{
            text-decoration: none;
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            width: 60%;
            background: #f8f9fa;
            font-weight: bold;;
            color: #383d41;
            margin: auto;
            cursor: pointer;
        }

        .register-right{
            background: #f8f9fa;
            border-top-left-radius: 10% 50%;
            border-bottom-left-radius: 10% 50%;
            box-shadow: 0 10px 20px 0 rgba(0, 0, 0, .03);
        }

        .register-left img{
            margin-top: 15%;
            margin-bottom: 5%;
            width: 55%;
            -webkit-animation: mover 2s infinite alternate;
            animation: mover 1s infinite alternate;
        }

        @-webkit-keyframes mover{
            0%{transform: translateY(0);}
            100%{transform: translateY(-20);}
        }

        @keyframes mover{
            0%{transform: translateY(0);}
            100%{transform: translateY(-20);}
        }

        .register-left p{
            font-weight: lighter;
            padding: 12%;
            margin-top: -5%;
        }

        .register .register-form{
            padding: 10%;
            margin-top: 10%;
        }

        .btnRegister{
            float: right;
            margin-top: 10%;
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            background: #0062cc;
            color: #fff;
            font-weight: 600;
            width: 50%;
            cursor: pointer;
        }

        .register .nav-tabs .nav-link:hover{
            border: none;
        }

        .register .nav-tabs .nav-links.active{
            width: 100px;
            color: #0062cc;
            border: 2px solid #0062cc;
            border-top-left-radius: 1.5rem;
            border-bottom-left-radius: 1.5rem;
        }

        .register-heading{
            font-size: 20px;
            text-align: center;
            margin-top: 8%;
            margin-bottom: -15%;
            color: #495057;
        }

        ::placeholder{
            font-size: 14px;
        }

        /* registration form ends */
.card-body{
    margin: auto;
}
.input-group-prepend{
    margin: auto;
}
.divider-text{
    position: relative;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 15px;
}

.divider-text span{
    padding: 7px;
    font-size: 12px;
    position: relative;
    z-index: 2;
}

.divider-text:after{
    content: "";
    position: absolute;
    width: 100%;
    border-bottom: 1px solid #ddd;
    top: 55%;
    left: 0;
    z-index: 1;
}

.btn-facebook{
    background-color: #405D9D!important;
    color: #fff!important;
}

.btn-gmail{
    background-color: #ea4335!important;
    color: #fff!important;
}
    </style>
</head>
<body>
    
</body>
</html>