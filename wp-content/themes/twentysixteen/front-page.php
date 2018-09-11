<?php
get_header();
get_the_title() ;
$uploads = wp_upload_dir();?>
<title>Risk Tolerance Questionnaire | Pocket Risk</title>
<div class="ui wrapper">
<div class="content">
<div class="ui segment vertical center aligned masthead home_background">
<div class="ui container">
<div class="ui header h1">
Know Your Clients’ Risk Tolerance
</div>
<div class="ui header h2">
Pocket Risk is an online <h1 class="inline-h1">risk tolerance questionnaire</h1> for financial advisors.<br>
It helps you assess how much investment risk your clients are willing to take.
</div>
<form class="try-form" action="/account_signups/new" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="✓">
<input type="hidden" name="plan" id="plan" value="us_professional_monthly">
<div class="ui big form">
<div class="two fields">
<div class="seven wide field">
<input type="email" name="email" id="email" value="" placeholder="Your Work Email">
</div>
<div class="nine wide field">
<button class="ui big primary button">Try Questionnaire Now <i class="fas fa-arrow-right"></i></button>
</div>
</div>
</div>
</form>
</div>
</div>
<div class="ui segment vertical seen-on">
<div class="ui text container">
<h4>As Seen On...</h4>
<div class="ui stackable four column centered grid customer-images">
<div class="column">
<img src="<?php echo $uploads['url']; ?>/financial_planning.png" alt="Financial planning">
</div>
<div class="column">
<img src="<?php echo $uploads['url']; ?>/investment_news.png" alt="Investment news">
</div>
<div class="column">
<img src="<?php echo $uploads['url']; ?>/cnbc.png" alt="Cnbc">
</div>
<div class="column">
<img src="<?php echo $uploads['url']; ?>/ft_adviser.png" alt="Ft adviser">
</div>
</div>
</div>
</div>
<div class="ui segment vertical problem-risk-questionnaires">
<div class="ui text container">
<h3>The Problem With Risk Questionnaires Today</h3>
<div class="ui stackable three column grid">
<div class="column">
<h4>Boilerplate questionnaires</h4>
<p>Have you come across those boilerplate questionnaires that are easily gamed and fail to give you an accurate result?</p>
<p>The type of questionnaires you and your clients can’t take seriously but <em>have</em> to do to “check the box”? 67% of the advisors we speak to still use those questionnaires, do you?</p>
</div>
<div class="column">
<h4>Difficult to use</h4>
<p>Have you found yourself having to explain a risk tolerance questionnaire to a client or even fill it out for them?</p>
<p>Do you send paper questionnaires or struggle with yet another client online log in?</p>
</div>
<div class="column">
<h4>Not compliant</h4>
<p>If the regulator entered your office today and went through your suitability files, would you pass or be worried about a fine?</p>
<p>Have you ever had a client complaint? Are you confident your reputation could survive it without the proper suitability documentation? Would be scrambling for the right paperwork?</p>
</div>
</div>
</div>
</div>
<div class="ui segment vertical alternative why-choose">
<div class="ui text container">
<h3>Pocket Risk Helps You Know Your Clients And Recommend The Right Investments</h3>
<div class="ui stackable grid">
<div class="seven wide column">
<h4 class="ui header">Easy For Clients To Complete</h4>
<p>– Your clients can complete the questionnaire on paper or online in 5 minutes. They get sent a private link where they can complete it and you get notified immediately when it’s done.</p>
</div>
<div class="nine wide column">
<img alt="Investor Risk Profile" src="<?php echo $uploads['url']; ?>/investor-risk-profile.png">
</div>
<div class="nine wide column">
<img alt="Risk Tolerance Questionnaire" src="<?php echo $uploads['url']; ?>/risk-tolerance-questionnaire.png">
</div>
<div class="seven wide column">
<h4 class="ui header">Academic and Compliant Questionnaire</h4>
<p>
– The questionnaire is robust. It is based on academic research and designed to meet regulator guidelines. Questions cover investment risk tolerance, risk capacity, client financial goals and behavioural finance.
</p>
</div>
<div class="seven wide column">
<h4 class="ui header">Know Your Clients’ Risk Tolerance</h4>
<p>
– Assess your clients’ results and discover what is really going on in their head. Spark insightful conversations and build a fruitful relationship.
</p>
</div>
<div class="nine wide column">
<img alt="Risk Tolerance Report" src="<?php echo $uploads['url']; ?>/risk-tolerance-report.png">
</div>
<div class="nine wide column">
<img alt="Risk Tolerance Assessment" src="<?php echo $uploads['url']; ?>/investor-risk-tolerance-assesment.png">
</div>
<div class="seven wide column">
<h4 class="ui header">Recommend The Right Investments</h4>
<p>
– You can connect the final score to your model portfolios and go straight from discussing risk to identifying investments.
</p>
</div>
</div>
</div>
</div>
<div class="ui segment vertical more-than-questionnaire">
<div class="ui text container">
<h3>More Than A Questionnaire…</h3>
<div class="ui stackable three column centered grid">
<div class="column">
<img src="<?php echo $uploads['url']; ?>/website.png" alt="Website">
<p>Add Pocket Risk to your website</p>
</div>
<div class="column">
<img src="<?php echo $uploads['url']; ?>/model-portfolios.png" alt="Model portfolios">
<p>Add your model portfolios</p>
</div>
<div class="column">
<img src="<?php echo $uploads['url']; ?>/security.png" alt="Security">
<p>Rock solid security</p>
</div>
<div class="column">
<img src="<?php echo $uploads['url']; ?>/international.png" alt="International">
<p>International - US, UK, Canada, Australia, NZ, India</p>
</div>
<div class="column">
<img src="<?php echo $uploads['url']; ?>/logo-branding.png" alt="Logo branding">
<p>Add your logo and branding</p>
</div>
<div class="column">
<img src="<?php echo $uploads['url']; ?>/integrations.png" alt="Integrations">
<p>Integrations - Redtail CRM. More coming soon</p>
</div>
<div class="column">
<img src="<?php echo $uploads['url']; ?>/mobile.png" alt="Mobile">
<p>Mobile friendly</p>
</div>
<div class="column">
<img src="<?php echo $uploads['url']; ?>/disclosures.png" alt="Disclosures">
<p>Add your own questions and disclosures</p>
</div>
<div class="column">
<img src="<?php echo $uploads['url']; ?>/compliance.png" alt="Compliance">
<p>Compliance - FINRA, SEC, FCA, MFDA, IIROC, ASIC and others</p>
</div>
</div>
</div>
</div>
<div class="ui segment vertical start-assessing">
<div class="ui text center aligned container">
<h3>Start Assessing Your Clients’ Risk Tolerance Today</h3>
<a href="/pricing" class="ui big primary button">Start My 14-Day Free Trial <i class="fas fa-arrow-right"></i></a>
</div>
</div>
<div class="ui segment vertical alternative trusted-by">
<div class="ui text container">
<h3>Pocket Risk Is Trusted By…</h3>
<div class="ui stackable four column centered grid">
<div class="column">
<img src="<?php echo $uploads['url']; ?>/univest.png" alt="Univest">
<p>$5.2 billion banking group</p>
</div>
<div class="column">
<img src="<?php echo $uploads['url']; ?>/richard-siegel.png" alt="Richard siegel">
<p>Richard Siegel - ARQ Wealth Advisors - $135m AUM</p>
</div>
<div class="column">
<img src="<?php echo $uploads['url']; ?>/rothenberg.png" alt="Rothenberg">
<p>Independent Canadian Financial Services Broker</p>
</div>
<div class="column">
<img src="<?php echo $uploads['url']; ?>/home/steve-martin.png" alt="Steve martin">
<p>Steve Martin - Smart Financial - £70m AUM Independent Financial Adviser</p>
</div>
<div class="column">
<img src="<?php echo $uploads['url']; ?>/michelle-smith.png" alt="Michelle smith">
<p>Michelle Smith - Source Financial Advisors - $265m AUM</p>
</div>
<div class="column">
<img src="<?php echo $uploads['url']; ?>/guidestone.png" alt="Guidestone">
<p>$10.4 billion financial services group</p>
</div>
<div class="column">
<img src="<?php echo $uploads['url']; ?>/ryan-callan.png" alt="Ryan callan">
<p>Ryan Callan - Callan Capital - $724m AUM</p>
</div>
<div class="column">
<img src="<?php echo $uploads['url']; ?>/randolph-redmond.png" alt="Randolph redmond">
<p>Randolph Redmond - IAR<br>
Cambridge Investment Research</p>
</div>
</div>
</div>
</div>
<div class="ui segment vertical email-course">
<div class="ui text container">
<h3>Free 5-Part Email Course: <em>How To Assess Your Clients’ Risk Profile</em></h3>
<div class="ui stackable grid">
<div class="nine wide column">
<h5>You will learn:</h5>
<p>The four risks in your clients' risk profile</p>
<p>Where compliance is going next</p>
<p>Case Study - How one advisor successfully on-boards her clients</p>
</div>
<div class="seven wide column">
<form class="ui big form" data-drip-embedded-form="64427705" action="https://www.getdrip.com/forms/64427705/submissions" method="post">
<div class="field">
<input type="email" name="fields[email]" id="fields_email" value="" placeholder="Your Work Email">
</div>
<div class="field">
<button class="ui big primary button">Send Me The Course</button>
</div>
</form>
</div>
</div>
</div>
</div>
<div class="ui segment vertical alternative our-partnerships">
<div class="ui text container">
<h3>Partnerships</h3>
<div class="ui stackable centered grid">
<div class="five wide column">
<img src="<?php echo $uploads['url']; ?>/schwab.png" alt="Schwab">
</div>
<div class="five wide column">
<img src="<?php echo $uploads['url']; ?>/cambridge-investment-research.png" alt="Cambridge investment research">
</div>
<div class="five wide column">
<img src="<?php echo $uploads['url']; ?>/xy-planning-network.png" alt="Xy planning network">
</div>
<div class="four wide column">
</div>
<div class="four wide column">
<img src="<?php echo $uploads['url']; ?>/garrett-planning-network.png" alt="Garrett planning network">
</div>
<div class="four wide column">
<img src="<?php echo $uploads['url']; ?>/napfa.png" alt="Napfa">
</div>
<div class="four wide column">
</div>
</div>
</div>
</div>
<div class="ui segment vertical start-assessing">
<div class="ui text center aligned container">
<h3>Start Assessing Your Clients’ Risk Tolerance Today</h3>
<a href="/pricing" class="ui big primary button">Start My 14-Day Free Trial <i class="fas fa-arrow-right"></i></a>
</div>
</div>
<span class="us-home-page"></span>
</div>
</div>
<?php
get_footer(); ?>