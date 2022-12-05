<?
    $data1 = $_POST['data1'];
    $data2 = $_POST['data2'];
    $data3 = $_POST['data3'];

    
?>

<!DOCTYPE html>
<html lang="en">

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>圖表</title>
    <script type="text/javascript" src="http://www.pureexample.com/js/lib/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="http://www.pureexample.com/js/flot/jquery.flot.min.js"></script>
    <script type="text/javascript" src="http://www.pureexample.com/js/lib/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="http://www.pureexample.com/js/flot/jquery.flot.min.js"></script>
    <style type="text/css">
        #flotid {
            width: 50%;
            height: 300px;
        }
    </style>
    <style>
        body {
            margin: 5%;
        }
    </style>




</head>

<body>
    <form action="test1.php">
    <div id="flotid"></div>
    <script type="text/javascript">
        var data = [
            [1, 150],
            [2, 127],
            [3, 137],
            [4, <? echo $data1[0] ?>],
            [5, <? echo $data1[1] ?>],
            [6, <? echo $data1[2] ?>],
            [7, <? echo $data1[3] ?>],
            [8, <? echo $data1[4] ?>],
            [9, <? echo $data1[5] ?>],
            [10, <? echo $data1[6] ?>],
            [11, <? echo $data1[7] ?>],
            [12, <? echo $data1[8] ?>]
        ];
        var data2 = [
            [1, 100],
            [2, 90],
            [3, 45],
            [4, <? echo $data2[0] ?>],
            [5, <? echo $data2[1] ?>],
            [6, <? echo $data2[2] ?>],
            [7, <? echo $data2[3] ?>],
            [8, <? echo $data2[4] ?>],
            [9, <? echo $data2[5] ?>],
            [10, <? echo $data2[6] ?>],
            [11, <? echo $data2[7] ?>],
            [12, <? echo $data2[8] ?>]
        ];
        var data3 = [
            [1, 60],
            [2, 85],
            [3, 90],
            [4, <? echo $data3[0] ?>],
            [5,<? echo $data3[1] ?>],
            [6, <? echo $data3[2] ?>],
            [7, <? echo $data3[3] ?>],
            [8, <? echo $data3[4] ?>],
            [9, <? echo $data3[5] ?>],
            [10, <? echo $data3[6] ?>],
            [11, <? echo $data3[7] ?>],
            [12, <? echo $data3[8] ?>]
        ];

        var dataset = [{
                label: "績優股",
                data: data
            },
            {
                label: "高風險股",
                data: data2
            },
            {
                label: "潛力股",
                data: data3
            }
        ];


        var options = {
            series: {
                lines: {
                    show: true
                },
                points: {
                    radius: 4,
                    show: true
                }
            }
        };

        $(document).ready(function() {
            $.plot($("#flotid"), dataset, options);
        });
    </script>
    <br>
     <button type="submit" class="btn btn-primary" style="margin-left:23%;">返回</button>
    </form>



</body>

</html>