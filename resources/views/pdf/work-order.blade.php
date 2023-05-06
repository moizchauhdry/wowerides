<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Work Order - {{$wo->id}}</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap');

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        ul {
            list-style: none;
        }

        .top-header {
            display: inline-block;
            width: 100%;
            margin: 0;
            margin-bottom: 80px;
        }

        .top-header .wow-logo {
            height: 15%;
            width: 70%;
            float:left;
            margin-left: -30px;
        }
        
        .top-header .top-header-list{
            width: 40%;
            float:left;
            padding: 0;
            margin-left: 30px;
        }
        .top-header-list h1{
            margin: 0;
            padding: 0;
            /* font-size:20px; */
            width: 100%;
        }

        .top-header-list ul{
            margin-left: 70px;
            width: 100%;
        }

        .top-header-list li{
            margin: 0 10px;
            width: 300px;
            display: inline-block;
        }
        .top-header-list li p{
            text-align: right;
            float:left;
            margin: 0;
            width: 35%;
            margin-left: -110px;
        }
        
        .top-header .data-row {
            /* float:left; */
            text-align: center;
            border: 1px solid rgb(128, 127, 127);
            background-color: whitesmoke;
            width: 100px;
            height: 20px;
            margin: 0;
            padding: 0;
            
        }

        .bottom-header{
            width: 100%;
            display:inline-block;
            margin-top: 100px;
        }

        .bottom-header-contact{
            /* float:left; */
            width: 50%;
            margin: 0;
            margin-left: -30px;
        }
        
        .bottom-header-list{
            /* float:left; */
            width: 70%;
            margin: 0;
            margin-top: -20%;
            margin-left: 425px;
        }
        
        .bottom-header-list li{
            margin: 0;
        }
        .bottom-header-list li p{
            float: left;
            margin: 0;
           margin-left: -130px;
        }

        .bottom-header .data-row {
            border: 1px solid rgb(128, 127, 127);
            background-color: whitesmoke;
            width: 250px;
            height: 25px;
        }

        .bottom-header-contact p{
            margin: 0 10px;
        }

        .bottom-header-list li p {
            width: 150px;
        }

        .bottom-header {
            display: flex !important;
            justify-content: space-between;
            align-items: end;
        }


        /* Main Body */


        .main-body {
            padding: 0;
            margin: 0;
            width: 100%;
        }

      

        table li {
            display: flex !important;
            justify-content: end;
            align-items: end;
            margin: 0;
        }


        table .data-row {
            border: 1px solid rgb(128, 127, 127);
            background-color: whitesmoke;
            height: 30px;
            width: 350px;
            padding: 2px 5px;
        }

        th {
            background: rgb(59, 78, 135);
            color: white;
            text-align: left;
            height: 40px;
            padding-left: 20px;
        }

        td{
            border:1px solid black;
            margin: 0;
            padding: 0;
            padding-left: 5px;
        }

        .first-table{
            width: 700px !important;
            margin: 0;
            margin-top: 50px;
            margin-left: -30px;
        }

        .first-table tr th:first-child{
            width: 300px;
        }
        .first-table tr th:last-child{
            width: 400px;
        }
        .first-table td{
            border:0;
            margin: 0;
            padding: 0;
        }

        .first-table li:first-child p{
            margin: 0;
        }
        
        .first-table li p{
            float: left;
            margin-left: -100px;
            width: 150px;
            padding-left: 5px;
        }

        .first-table .data-row{
            width: 250px;
            height: 30px;
            padding: 0;
            margin: 0;
            padding-left: 5px;
            margin-left: 170px;
        }

        .first-table tr td:first-child{
            padding-left: 5px;
        }

        .service-table,
        .parts-table {
            width: 750px;
            margin-top: 50px;
            margin-left: -30px;
        }
        .service-table th,
        .service-table td,
        .parts-table th,
        .parts-table td {
            width: 80px;
            height: 30px;
            text-align: center;
        }

        .service-table tr th:first-child,
        .service-table tr td:first-child,
        .parts-table tr th:first-child,
        .parts-table tr td:first-child {
            width: 350px;
            text-align: center;
        }

        .bottom-table-list{
            margin-left: 520px;
        }

        .bottom-table-list li {
            display: flex !important;
            justify-content: end;
            display:inline-block;
        }

        .bottom-table-list .data-row {
            background-color: rgb(226, 222, 222);
            width: 150px;
            height: 25px;
            display: flex !important;
            justify-content: space-between;
            /* float:left; */
            margin: 0;
            padding: 0 5px;
            padding-left: 5px;
        }

        .bottom-table-list .data-row span:last-child{
            margin-left: 80px;
        }

        .bottom-table-list li p {
            width: 100px;
            float:left;
            margin: 0;
            margin-left: -110px;
        }


        footer h5 {
            text-align: center;
            font-size: 20px;
            margin-top: 10rem;
            font-style:italic;
            font-weight:400;
        }


        .footer-sign div,
        .footer-date div {
            display: flex !important;
            width: 100%;
            align-items: end;
            justify-content: end;

        }

        .footer-date div {
            margin: 10px 0;
        }

        .footer-content p {
            width: 300px;
            text-align: end;
            margin-bottom: 20px;
            /* float:left; */
        }

        .footer-content hr {
            width: 300px;
            height: 2px;
            border:none;
            background: #000;
        }

        .footer-content {
            /* width: 100%; */
            display: inline-block;
        }
        .footer-content > div {
            float:left;
            width: 300px;
        }

        .footer-sign {
            width: 200px;
        }

        .footer-date {
            width: 200px;
            margin-left: 115px;
        } 

        .footer-date div:last-child{
            margin: 0;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    @include('pdf.partials.work-order')
</body>

</html>