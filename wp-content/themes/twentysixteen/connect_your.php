<?php //Template Name:Connecting Model Portfolios
get_header();
$uploads = wp_upload_dir();
?>

<title>Connecting Model Portfolios | Pocket Risk</title>
<div class="ui wrapper">
<div class="content">
<div class="ui segment vertical center aligned masthead blue_div">
<div class="ui text container">
<h1 class="ui header">
Know You Have The Right Portfolio<br>
For Your Prospects And Clients
</h1>
<h2>Connect your model portfolios to Pocket Risk’s scoring algorithm</h2>
<p class="pie-chart">
<img src="<?php echo $uploads['url']; ?>/risk-profile-questionnaire-pie-chart.png" alt="Risk profile questionnaire pie chart">
</p>
</div>
</div>
<div class="ui segment vertical ryan-callan">
<div class="ui center aligned text container">
<div class="testimonial">
<div class="testimonial-avatar">
<img src="<?php echo $uploads['url']; ?>/ryan-callan.png" alt="Ryan callan">
</div>
<div class="testimonial-body">
<p class="testimonial-quote">
“Pocket Risk helps my firm win new business. Through accurately assessing a person's risk profile<br>
I've been able to show prospects how their existing portfolio failed to meet their needs. As a result<br>
prospects have become clients and we've worked to correctly align their portfolios.”
</p>
<p class="testimonial-desc">
Ryan Callan, Callan Capital
</p>
</div>
</div>
</div>
</div>
<div class="ui segment vertical alternative steps-one-two-three">
<div class="ui center aligned container">
<div class="ui stackable column centered grid">
<div class="three column centered row">
<div class="column">
<p class="reason-number">0.1</p>
<h4 class="ui header">Add Your Model Portfolios</h4>
<p>– Add up to 11 model portfolios with different asset classes</p>
</div>
<div class="column">
<img src="<?php echo $uploads['url']; ?>/add-model-portfolios2.png" alt="Add model portfolios2">
</div>
</div>
<div class="three column centered row">
<div class="column">
<img src="<?php echo $uploads['url']; ?>/client-scores-connected.png" alt="Client scores connected">
</div>
<div class="column">
<p class="reason-number">0.2</p>
<h4 class="ui header">Client Scores Connected To Your Model Portfolios</h4>
<p>
– A low score will correspond to a conservative portfolio
</p>
</div>
</div>
<div class="three column centered row">
<div class="column">
<p class="reason-number">0.3</p>
<h4 class="ui header">Analyze Results, Make Investment Decisions</h4>
<p>
– Use results to recommend portfolios for clients
</p>
</div>
<div class="column">
<img src="<?php echo $uploads['url']; ?>/analyze-results.png" alt="Analyze results">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
get_footer();