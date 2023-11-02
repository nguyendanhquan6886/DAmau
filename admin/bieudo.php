
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<script src="https://www.gstatic.com/charts/loader.js"></script>

<body>
<div
id="myChart" style="width:100%; max-width:600px; height:500px;">
</div>

<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

// Set Data
const data = google.visualization.arrayToDataTable([
  ['Danh Mục', 'Số Lượng'],
  <?php
        $tongcate = count($thongke);
        foreach($thongke as $value){
            $cate_name = $value['cate_name'];
            $sl = $value['soluong'];
            // extract($value);
            $i=1;
            if($i== $tongcate){
                $dauphay = '';
            }
            else{
                $dauphay=',';
            }
            echo "['$cate_name',$sl]$dauphay";
            $i++;
        }
  ?>
//   ['Italy',54.8],
//   ['France',48.6],
//   ['Spain',44.4],
//   ['USA',23.9],
//   ['Argentina',14.5]
]);

// Set Options
const options = {
  title:'Biểu Đồ Danh Mục',
  is3D:true
};

// Draw
const chart = new google.visualization.PieChart(document.getElementById('myChart'));
chart.draw(data, options);

}
</script>

</body>

</html>