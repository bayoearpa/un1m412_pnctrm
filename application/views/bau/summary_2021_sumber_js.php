<script type="text/javascript">
    /*
     * DONUT CHART
     * -----------
     */

    var donutData<?php echo $key->id_mhsdsn ?> = [
     { label: 'Koran', data: <?php echo $lpm->get_summary_sumber_2021_send('1') ?>, color: '#f20b0b' },
      { label: 'Internet', data: <?php echo $lpm->get_summary_sumber_2021_send('2') ?>, color: '#ffad5f' },
      { label: 'Teman', data: <?php echo $lpm->get_summary_sumber_2021_send('3') ?>, color: '#ffd966' },
      { label: 'Alumni', data: <?php echo $lpm->get_summary_sumber_2021_send('4') ?>, color: '#9af073' },
      { label: 'Brosur', data: <?php echo $lpm->get_summary_sumber_2021_send('5') ?>, color: '#89ddfc' }
    ]
    $.plot('#donut-chart-<?php echo $key->id_mhsdsn ?>', donutData<?php echo $key->id_mhsdsn; ?>, {
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


    <?php } ?>
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