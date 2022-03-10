	<footer>
		<!-- <ul>
			<li>lorem</li>
			<li>lorem</li>
			<li>lorem</li>
			<li>lorem</li>
			&copy;<script>document.write(new Date().getFullYear());</script>
		</ul> -->
	</footer>
	<script>
		var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
		var yValues = [55, 49, 44, 24, 15];
		var barColors = ["red", "green","blue","orange","brown"];

		new Chart("myChart", {
		  type: "bar",
		  data: {
		    labels: xValues,
		    datasets: [{
		      backgroundColor: barColors,
		      data: yValues
		    }]
		  },
		  options: {
		    legend: {display: false},
		    title: {
		      display: true,
		      text: "World Wine Production 2018"
		    }
		  }
		});
	</script>
</body>
</html>