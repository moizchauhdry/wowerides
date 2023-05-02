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


        .container {
            padding: 0 100px;
        }

        .main {
            /* background-color: aquamarine; */
            padding: 20px 50px;
        }


        .top-header {
            display: flex;
            justify-content: space-between;
        }

        .top-header img {
            width: 40%;
            height: 40%;
        }

        .top-header .data-row {
            border: 1px solid rgb(128, 127, 127);
            background-color: whitesmoke;
            width: 200px;
            height: 30px;
            padding: 2px 5px;
            margin: 0 5px;
        }

        .bottom-header .data-row {
            border: 1px solid rgb(128, 127, 127);
            background-color: whitesmoke;
            width: 300px;
            height: 30px;
            padding: 2px 5px;
            margin: 0 5px;
        }

        header li {
            display: flex;
            justify-content: end;
            align-items: end;
            margin: 10px 0;
        }

        .bottom-header-list li p {
            width: 150px;
        }

        .bottom-header {
            display: flex;
            justify-content: space-between;
            align-items: end;
        }


        /* Main Body */


        .main-body {
            padding: 30px 0;
        }

        table {
            width: 85%;
        }

        table li {
            display: flex;
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


        table td:first-child {
            width: 540px;
        }

        table td:last-child p {
            width: 150px;
        }

        th {
            padding: 5px 0 5px 20px;
        }

        th,
        td {
            padding-left: 5px;
            height: 30px;
        }

        th {
            background: rgb(59, 78, 135);
            color: white;
            text-align: left;
        }

        tr:nth-of-type(even) {
            background: rgb(235, 235, 235);
        }



        .service-table {
            width: 100%;
            margin-top: 50px;
        }

        .parts-table {
            width: 100%;
        }

        .service-table th:not(:first-child),
        .service-table td:not(:first-child),
        .parts-table th:not(:first-child),
        .parts-table td:not(:first-child) {
            width: 140px;
            text-align: center;
        }

        .bottom-table-list li {
            display: flex;
            justify-content: end;
        }

        .bottom-table-list .data-row {
            background-color: rgb(226, 222, 222);
            width: 172px;
            height: 30px;
            padding: 2px 5px;
            margin: 0 5px;
            display: flex;
            justify-content: space-between;
        }

        .bottom-table-list p {
            width: 100px;
        }


        footer h5 {
            text-align: center;
            font-size: 20px;
            margin-top: 50px;
        }


        .footer-sign>div,
        .footer-date>div {
            display: flex;
            width: 100%;
            align-items: end;
            justify-content: end;

        }

        .footer-date>div {
            margin: 10px 0;
        }

        .footer-content p {
            width: 300px;
            text-align: end;
            margin: 0 10px;
        }

        .footer-content hr {
            width: 100%;
            height: 2px;
            background: #000;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
        }

        .footer-sign {
            width: 720px;
        }

        .footer-date {
            width: 550px;
        }
    </style>
</head>

<body>
    @include('pdf.partials.work-order')
</body>

</html>