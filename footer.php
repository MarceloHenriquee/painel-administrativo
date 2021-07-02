<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
        $("#menu-toggle").click(function(event) {
            event.preventDefault();
            $("#wrapper").toggleClass("toggled");
        })
    </script>
    <script src="js/chart/Chart.min.js"></script>
    <script>
        var contexto = document.getElementById("relatorio").getContext('2d');
        var grafico = new Chart(contexto, {
            type: 'line',
            data: {
                labels: ['Janeiro','Fevereiro','Março','Abril','maio','Junho','Julho'],
                datasets: [{
                    label: 'Vendas no ano',
                    backgroundColor: "#5898d9ff",
                    borderColor: "#5898d9ff",
                    data: [10,5,7,18,14,20,22]
                }]
            }
        });
    </script>
</body>
</html>