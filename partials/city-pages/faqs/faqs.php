<section style="background-color:lightgrey;">
	<p><a class="solar_pricing" name="cash_purchase"></a></p>
	<div class="d-flex justify-content-center">
		<div class="m-5 width-50 text-center">
			<h2><?php the_field('city_name'); ?> Solar FAQ's</h2>
			<?php 
			$city_name = get_field("city_name");
			$content = array();
			$content[] = '<div style="text-align:left;">
			<div class="faq" id="why-sungevity">
			<p class="question">Why a Sungevity Solar energy plan?</p>
			<div class="faq-answer" id="energy-consumption">
			We power lives with sunshine. By designing beautiful ' . $city_name . ' solar systems and providing flexible
			' . $city_name . ' financing plans, we enable people to generate their own energy and save money.
			</div>
			</div>
			<div class="faq" id="plan-end" style="text-align:left;">
			<p class="question">What happens when my ' . $city_name . ' solar energy plan ends?</p>
			<div class="faq-answer">
			<p>Your Sungevity ' . $city_name . ' solar energy plan lasts 20 years. At the end of the agreement, you can choose
			to renew your lease or have the system removed from your house.</p>
			</div>
			</div>
			<script type="application/ld+json">
			{
				"@context": "https://schema.org",
				"@type": "FAQPage",
				"mainEntity": [{
					"@type": "Question",
					"name": "Why a Sungevity Solar energy plan?",
					"acceptedAnswer": {
						"@type": "Answer",
						"text": "We power lives with sunshine. By designing beautiful ' . $city_name . ' solar systems and providing flexible
						' .$city_name. ' financing plans,
						we enable people to generate their own energy and save money.
						"
					}
					}, {
						"@type": "Question",
						"name": "What happens when my ' . $city_name. ' solar energy plan ends?",
						"acceptedAnswer": {
							"@type": "Answer",
							"text": "Your Sungevity ' . $city_name . ' solar energy plan lasts 20 years. At the end of the agreement, you can choose
							to renew your lease or have the system removed from your house.
							"
						}
						}]
					}
					</script>
					';
					$content[] = '<div class="faq" id="payments" style="text-align:left;">
					<p class="question">What are my payments?</p>
					<div class="faq-answer">
					<p>We offer a number of ' .$city_name. ' payment options for those who qualify, including a $0 money down solar lease,
					a pre-paid lease, fixed payment lease, and a Power Purchase Agreement (PPA). Note that financing options
					differ by location and credit history. After we have consulted with you about your current (and future)
					$city_name energy use, we use our remote proprietary design tool to engineer a custom solar solution for
					your home. We use handpicked, local solar experts to install your solar system.</p>
					</div>
					</div>
					<div class="faq" id="what-next" style="text-align:left;">
					<p class="question">What happens after I sign up to go solar with Sungevity?</p>
					<div class="faq-answer">
					<p>After you sign up, we will start working on getting your ' .$city_name. ' solar system up and running by scheduling a
					home visit with one of our excellent local installers. We will also handle the permits and other paperwork for
					you. After installation, we provide monitoring tools so you can track your system&rsquo;s production.</p>
					</div>
					</div>
					<div class="faq" id="excess-production" style="text-align:left;">
					<p class="question">What if my system generates more electricity than I use?</p>
					<div class="faq-answer">
					<p>Depending on your ' .$city_name. ' utility, you may get a credit for this excess production. The additional
					electricity your system produces flows back into the grid and runs your meter backwards, earning you
					credits. Then, when it is dark, you draw electricity back from the grid.</p>
					</div>
					</div>
					</div>
					<script type="application/ld+json">
					{
						"@context": "https://schema.org",
						"@type": "FAQPage",
						"mainEntity": [{
							"@type": "Question",
							"name": "What are my payments?",
							"acceptedAnswer": {
								"@type": "Answer",
								"text": "We offer a number of ' .$city_name. ' payment options for those who qualify, including a $0 money down
								solar lease,
								a pre-paid lease, fixed payment lease, and a Power Purchase Agreement (PPA). Note that financing options
								differ by location and credit history. After we have consulted with you about your current (and future)
								' .$city_name. ' energy use, we use our remote proprietary design tool to engineer a custom solar solution for
								your home. We use handpicked, local solar experts to install your solar system."
							}
							}, {
								"@type": "Question",
								"name": "What happens after I sign up to go solar with Sungevity?",
								"acceptedAnswer": {
									"@type": "Answer",
									"text": "After you sign up, we will start working on getting your ' .$city_name. ' solar system up and running by
									scheduling a
									home visit with one of our excellent local installers. We will also handle the permits and other paperwork for
									you. After installation, we provide monitoring tools so you can track your system&rsquo;s production."
								}
								}, {
									"@type": "Question",
									"name": "What if my system generates more electricity than I use?",
									"acceptedAnswer": {
										"@type": "Answer",
										"text": "Depending on your ' .$city_name. ' utility, you may get a credit for this excess production. The additional
										electricity your system produces flows back into the grid and runs your meter backwards, earning you
										credits. Then, when it is dark, you draw electricity back from the grid."
									}
									}]
								}
								</script>
								';
								$content[] = '<div style="text-align:left;">
								<div class="faq" id="solar-right">
								<p class="question">Is solar right for my ' .$city_name. ' home?</p>
								<div class="faq-answer">
								<p>We offer a no-pressure consultation to help figure out if going solar works for you. First, we will gather
								all 12 months of your past energy use in ' .$city_name. '. That is what makes our ' .$city_name. ' quotes as accurate
								as possible, by both the amount by which we can offset your use and the cost/savings potential of going
								solar. By learning how your usage fluctuates from month to month, and because both solar production and
								utility rates fluctuate as well, knowing all 12 months makes the quotes as accurate and personalized as
								possible. We will then use our remote proprietary design tool to engineer a custom solar solution for your
								home. Of course, we also complete all of the interconnection paperwork on your behalf. And finally, we
								use local solar experts to install your solar system hassle-free.</p>
								</div>
								</div>
								<div class="faq" id="roof">
								<p class="question">How big a roof do I need in '.$city_name.'?</p>
								<div class="faq-answer">
								<p>This depends on your $city_name usage history. When you request an iQuote, Sungevity will use our
								proprietary design tool to look at your roof and determine how many ' .$city_name.  ' solar panels it can
								accommodate.</p>
								</div>
								</div>
								<div class="faq" id="re-roof">
								<p class="question">Should I re-roof my ' .$city_name. ' house before I install solar panels?</p>
								<div class="faq-answer">
								<p>' .$city_name. ' Solar panels last a long time so it makes sense to avoid having to remove and reinstall them.
								Your Solar Consultant will help you assess the need to re-roof.</p>
								</div>
								</div>
								<div class="faq" id="shaded">
								<p class="question">What if my ' .$city_name. ' roof is shaded?</p>
								<div class="faq-answer">
								<p>Shade reduces the amount of electricity your ' .$city_name. ' solar energy system can produce. Our remote solar
								design team will work to position your panels where they will get maximum sun exposure. On occasion, we
								find that a roof is too shady to make solar feasible.</p>
								</div>
								</div>
								<div class="faq" id="maintenance">
								<p class="question">Do ' .$city_name. ' solar systems require maintenance?</p>
								<div class="faq-answer">
								<p> ' .$city_name. ' solar systems generally require very little maintenance. If you lease a system, we guarantee
								your systems energy production. If you ever have any questions about what maintenance is necessary,
								please contact us at <a href="mailto:customerservice@sungevity.com"
								target="">customerservice@sungevity.com</a>.</p>
								</div>
								</div>
								<div class="faq" id="blackout">
								<p class="question">Will I have power during a blackout?</p>
								<div class="faq-answer">
								<p>In the event of a '.$city_name. ' blackout, your inverter will automatically shut down for safety reasons.
								Thus you will not have electricity until power is restored to the grid.</p>
								</div>
								</div>
								<div class="faq" id="batteries">
								<p class="question">Are battery options available in ' . $city_name .'?</p>
								<div class="faq-answer">
								<p>Yes, Sungevity offers battery solutions with your grid-tied solar system in ' .$city_name. '.</p>
								</div>
								</div>
								<div class="faq" id="bad-weather">
								<p class="question">Do ' .$city_name. ' solar panels generate electricity in bad weather?</p>
								<div class="faq-answer">
								<p>' . $city_name. ' Solar panels need sun to generate electricity, but even in areas with bad weather your system
								will still produce. If you live in a cloudy area, or an area with seasonal snow, your expected weather
								conditions will be factored into our estimates for your energy production.</p>
								</div>
								</div>
								<div class="faq" id="fog">
								<p class="question">Does solar work in foggy neighborhoods?</p>
								<div class="faq-answer">
								<p>' .$city_name. ' Solar systems continue to produce even when it is cloudy. For example, on a cloudy day, your
								panels might produce 30% of what they normally would. If you live in a cloudy area, or an area with
								seasonal snow, your expected weather conditions will be factored into our estimates for your energy
								production.</p>
								</div>
								</div>
								</div>
								<script type="application/ld+json">
								{
									"@context": "https://schema.org",
									"@type": "FAQPage",
									"mainEntity": [{
										"@type": "Question",
										"name": "Is solar right for my ' .$city_name. ' home?",
										"acceptedAnswer": {
											"@type": "Answer",
											"text": "We offer a no-pressure consultation to help figure out if going solar works for you. First, we will gather
											all 12 months of your past energy use in ' .$city_name. '
											.That is what makes our ' .$city_name. ' quotes as accurate
											as possible,
											by both the amount by which we can offset your use and the cost / savings potential of going
											solar.By learning how your usage fluctuates from month to month,
											and because both solar production and
											utility rates fluctuate as well,
											knowing all 12 months makes the quotes as accurate and personalized as
											possible
											.We will then use our remote proprietary design tool to engineer a custom solar solution for your
											home.Of course,
											we also complete all of the interconnection paperwork on your behalf.And
											finally,
											we
											use local solar experts to install your solar system hassle - free.
											"
										}
										}, {
											"@type": "Question",
											"name": "How big a roof do I need in '.$city_name.'?",
											"acceptedAnswer": {
												"@type": "Answer",
												"text": "This depends on your $city_name usage history. When you request an iQuote, Sungevity will use our
												proprietary design tool to look at your roof and determine how many ' .$city_name.  '
												solar panels it can
												accommodate.
												"
											}
											}, {
												"@type": "Question",
												"name": "Should I re-roof my ' .$city_name. ' house before I install solar panels?",
												"acceptedAnswer": {
													"@type": "Answer",
													"text": "' .$city_name. ' Solar panels last a long time so it makes sense to avoid having to remove and reinstall them.
													Your Solar Consultant will help you assess the need to re - roof.
													"
												}
												}, {
													"@type": "Question",
													"name": "What if my ' .$city_name. ' roof is shaded?",
													"acceptedAnswer": {
														"@type": "Answer",
														"text": "Shade reduces the amount of electricity your ' .$city_name. ' solar energy system can produce. Our remote solar
														design team will work to position your panels where they will get maximum sun exposure.On occasion,
														we
														find that a roof is too shady to make solar feasible.
														"}
														},
														{
															"@type": "Question",
															"name": "Do ' .$city_name. ' solar systems require maintenance?",
															"acceptedAnswer": {
																"@type": "Answer",
																"text": "' .$city_name. ' solar systems generally require very little maintenance. If you lease a system, we guarantee
																your system is energy production. If you ever have any questions about what maintenance is necessary,
																please contact us at <a href= "mailto:customerservice@sungevity.com"
																target = "" > customerservice@sungevity.com < /a>."
															}
															},
															{
																"@type": "Question",
																"name": "Will I have power during a blackout?",
																"acceptedAnswer": {
																	"@type": "Answer",
																	"text": "In the event of a '.$city_name. ' blackout, your inverter will automatically shut down for safety reasons.
																	Thus you will not have electricity until power is restored to the grid.
																	"
																}
																},
																{
																	"@type": "Question",
																	"name": "Are battery options available in ' . $city_name .'?",
																	"acceptedAnswer": {
																		"@type": "Answer",
																		"text": "Yes, Sungevity offers battery solutions with your grid-tied solar system in ' .$city_name. '."
																	}
																	},
																	{
																		"@type": "Question",
																		"name": "Do ' .$city_name. ' solar panels generate electricity in bad weather?",
																		"acceptedAnswer": {
																			"@type": "Answer",
																			"text": "' . $city_name. ' Solar panels need sun to generate electricity, but even in areas with bad weather your system
																			will still produce.If you live in a cloudy area,
																			or an area with seasonal snow,
																			your expected weather
																			conditions will be factored into our estimates
																			for your energy production.
																			"
																		}
																		},
																		{
																			"@type": "Question",
																			"name": "Does solar work in foggy neighborhoods?",
																			"acceptedAnswer": {
																				"@type": "Answer",
																				"text": "' .$city_name. ' Solar systems continue to produce even when it is cloudy.For example,
																				on a cloudy day,
																				your
																				panels might produce 30 % of what they normally would.If you live in a cloudy area,
																				or an area with
																				seasonal snow,
																				your expected weather conditions will be factored into our estimates
																				for your energy
																				production.
																				"
																			}
																		}
																		]
																	}
																	</script>
																	';
																	$content[] = '<h3> ' .$city_name. ' Solar FAQs</h3>
																	<p class="question">How much does solar in ' .$city_name. ' cost?</p>
																	<div class="faq-answer">Our solar systems are custom-designed to each family unique needs, so there is no cookie-cutter
																	answer. Since we custom
																	design, we ensure you save money over your current energy bill. And we offer a variety of payment options to fit
																	your
																	needs.</div>
																	<p class="question">How does it work?</p>
																	<div class="faq-answer">
																	When you contact Sungevity about ' .$city_name. ' solar installation, the process is easier than many people think.
																	We are
																	able to design your home solar system using high-resolution satellite imagery, meaning we can do it all for you by
																	phone
																	and show you what it looks like on your computer. There is no need to meet in person! When you sign up to get our
																	solar
																	design installed, we work closely with local installers and we handle permits and paperwork. After it is all set up,
																	we
																	provide monitoring tools so you can track your solar energy production on your smartphone.
																	</div>
																	<p class="question">What is net metering?</p>
																	<div class="faq-answer">
																	<p>Net metering with solar is a billing mechanism that gives you credits back on your electric bill when your
																	panels
																	produce more electricity than your home uses in a month. In short, it means your solar panels could potentially MAKE
																	you
																	money!</p>
																	<p>Net metering is only available in certain areas from certain utilities, and sometimes the rules change. We would have
																	to
																	ensure on a given day that net metering in ' .$city_name. ' is still available to homeowners.</p>
																	</div>
																	<script type="application/ld+json">
																	{
																		"@context": "https://schema.org",
																		"@type": "FAQPage",
																		"mainEntity": [{
																			"@type": "Question",
																			"name": "How much does solar in ' .$city_name. ' cost?",
																			"acceptedAnswer": {
																				"@type": "Answer",
																				"text": "Our solar systems are custom-designed to each family unique needs, so there is no cookie-cutter answer. Since we
																				custom
																				design,
																				we ensure you save money over your current energy bill.And we offer a variety of
																				payment options to fit
																				your
																				needs.
																				"
																			}
																			}, {
																				"@type": "Question",
																				"name": "How does it work?",
																				"acceptedAnswer": {
																					"@type": "Answer",
																					"text": "When you contact Sungevity about ' .$city_name. 'solar installation, the process is easier than many people think.
																					We are
																					able to design your home solar system using high - resolution satellite imagery,
																					meaning we can do it all
																					for
																					you by
																					phone
																					and show you what it looks like on your computer
																					.There is no need to meet in person! When you sign up to get our
																					solar
																					design installed,
																					we work closely with local installers and we handle permits and paperwork.After it is all set up,
																					we
																					provide monitoring tools so you can track your solar energy production on your smartphone.
																					"
																				}
																				}, {
																					"@type": "Question",
																					"name": "What is net metering?",
																					"acceptedAnswer": {
																						"@type": "Answer",
																						"text": "Net metering with solar is a billing mechanism that gives you credits back on your electric bill when your
																						panels produce more electricity than your home uses in a month.In short,
																						it means your solar panels could potentially MAKE you money!
																						Net metering is only available in certain areas from certain utilities,
																						and sometimes the rules change.We would have to ensure on a given day that net metering in ' .$city_name. ' is still available to homeowners."

																					}
																					}]
																				}
																				</script>
																				';

																				echo $content[rand(0, count($content)-1)];

																				?>
																				<div class="text-center">
																					<a class="btn btn-orange text-center" href="https://sungevity.com/faqs/" title="Get A Free Quote">
																						<i class="fa fa-question-circle-o" aria-hidden="true"></i>
																					&nbsp;MORE FAQ'S</a>
																				</div>
																			</div>
																		</div> 
																	</section>