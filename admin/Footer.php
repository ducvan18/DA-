
<script type="text/javascript" src="./assets/js/ajaxWork.js"></script>
<script type="text/javascript" src="./assets/js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script>
    $(document).ready(function() {
        thongKe();
        const char = new Morris.Area({
            // ID of the element in which to draw the chart.
            element: 'myfirstchart',
            // Chart data records -- each entry in this array corresponds to a point on
            // the chart.
            // data: [{
            //         year: '2008',
            //         value: 20
            //     },
            //     {
            //         year: '2009',
            //         value: 10
            //     },
            //     {
            //         year: '2010',
            //         value: 5
            //     },
            //     {
            //         year: '2011',
            //         value: 5
            //     },
            //     {
            //         year: '2012',
            //         value: 20
            //     }
            // ],
            // The name of the data record attribute that contains x-values.
            xkey: 'date',
            // A list of names of data record attributes that contain y-values.
            ykeys: ['total_money','count_order'],
            // Labels for the ykeys -- will be displayed when you hover over the
            // chart.
            labels: ['Total money', 'Quantity order']
            
        });
        $('select[name="select_date"]').change(function(){
            var date = document.querySelector('select[name="select_date"]').value;
            // thongKe(date);
            $.ajax({
                url:'./Models/ThongKe.php',
                method:'post',
                data:{date:date},
                dataType: 'JSON',
                success:function(data){
                    char.setData(data);
                }
            });
        });
        function thongKe(){
            // console.log(date);
            $.ajax({
                url:'./Models/ThongKe.php',
                method:'post',
                dataType: 'JSON',
                success:function(data){
                    char.setData(data);
                }
            });

        }
    });
</script>
</body>

</html>