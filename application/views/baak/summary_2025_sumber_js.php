<script type="text/javascript">
    /*
     * DONUT CHART
     * -----------
     */

    var donutData = [
     { label: 'Senior / Kakak kelas', data: <?php echo $baak->get_summary_sumber_2025_send('1') ?>, color: '#f20b0b' },
      { label: 'Sosial Media', data: <?php echo $baak->get_summary_sumber_2025_send('2') ?>, color: '#ffad5f' },
      { label: 'Keluarga / Saudara / teman', data: <?php echo $baak->get_summary_sumber_2025_send('3') ?>, color: '#ffd966' },
      { label: 'Alumni', data: <?php echo $baak->get_summary_sumber_2025_send('4') ?>, color: '#9af073' },
      { label: 'Brosur', data: <?php echo $baak->get_summary_sumber_2025_send('5') ?>, color: '#89ddfc' },
      { label: 'Expo', data: <?php echo $baak->get_summary_sumber_2025_send('6') ?>, color: '#8e7cc3' },
      { label: 'Sekolah', data: <?php echo $baak->get_summary_sumber_2025_send('7') ?>, color: '#c27ba0' }
    ]
    $.plot('#donut-chart', donutData, {
        series: {
          pie: { 
            show: true,
            radius: 1,
            label: {
              show: true,
              radius: 3/4,
              formatter: labelFormatter,
              background: {
                opacity: 0.5
              }
            }
          }
        },
        legend: {
          show: false
        }
      });
    /*
     * END DONUT CHART
     */
     /*
    
   * Custom Label formatter
   * ----------------------
   */
  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
      + label
      + '<br>'
      + Math.round(series.percent) + '%</div>'
  }
  
</script>