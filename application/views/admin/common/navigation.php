<div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <nav class="pcoded-navbar">
                    <div class="pcoded-inner-navbar main-menu" style="width: 100%;">
						<?php if ($this->ion_auth->is_super_admin() || 
								$this->ion_auth->is_customer_service() || 
								$this->ion_auth->is_marketing() ||
								$this->ion_auth->is_warehouse()): ?>
							<ul class="pcoded-item pcoded-left-item">
								<li class="pcoded-hasmenu">
									<a href="javascript:void(0)">
										<span class="pcoded-micon"><i class="icofont icofont-money-bag"></i></span>
										<span class="pcoded-mtext"><?= __('sales'); ?></span>
									</a>
									<ul class="pcoded-submenu">
										<li>
											<a href="/orders">
												<span class="pcoded-mtext"><?= __('orders'); ?></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('customers'); ?></span>
											</a>
										</li> 
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('customers_requests'); ?></span>
											</a>
										</li>
										<li>
											<a href="/tickets">
												<span class="pcoded-mtext"><?= __('tickets'); ?></span>
											</a>
										</li>
									</ul>
								</li>
							</ul>
						<?php endif; ?>
						<?php if ($this->ion_auth->is_super_admin() || $this->ion_auth->is_warehouse()): ?>
							<ul class="pcoded-item pcoded-left-item">
								<li class="pcoded-hasmenu">
									<a href="javascript:void(0)">
										<span class="pcoded-micon"><i class="icofont icofont-box"></i></span>
										<span class="pcoded-mtext"><?= __('orders_preparation'); ?></span>
									</a>
									<ul class="pcoded-submenu">
										<li>
											<a href="/orderPreparation">
												<span class="pcoded-mtext"><?= __('in_preparation'); ?></span>
											</a>
										</li>
										<li>
											<a href="#">
												<form action="./orderPreparation" method="POST" class="inline-block" id="ready_to_shipp_form">
												<input type="hidden" name="status" value="ready_to_shipp" />    
												<span class="pcoded-mtext" onClick="ready_to_shipp_form()"><?= __('ready_to_shipp'); ?></span>
												</form>
											</a>
										</li>
										<li>
											<a href="#">
											<form action="./orderPreparation" method="POST" class="inline-block" id="Return_form">
                                				<input type="hidden" name="status" value="Return" /> 
												<span class="pcoded-mtext" onClick="Return_form()"><?= __('returns'); ?></span>
											</form>
											</a>
										</li>
									</ul>
								</li>
							</ul>
						<?php endif; ?>
						<?php if ($this->ion_auth->is_super_admin() ||
								$this->ion_auth->is_customer_service() ||
								$this->ion_auth->is_marketing() ||
								$this->ion_auth->is_warehouse()): ?>
							<ul class="pcoded-item pcoded-left-item">
								<li class="pcoded-hasmenu">
									<a href="javascript:void(0)">
										<span class="pcoded-micon"><i class="icofont icofont-truck-loaded"></i></span>
										<span class="pcoded-mtext"><?= __('shipping'); ?></span>
									</a>
									<ul class="pcoded-submenu">
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('customer_returns'); ?></span>
											</a>
										</li>
										<li>
											<a href="/batches">
												<span class="pcoded-mtext"><?= __('batches'); ?></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('pick_ups'); ?></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('shipping_prices'); ?></span>
											</a>
										</li>
										<li>
											<a href="/zones">
												<span class="pcoded-mtext"><?= __('shipping_configuration'); ?></span>
											</a>
										</li>
									</ul>
								</li>
							</ul>
						<?php endif; ?>
						<?php if ($this->ion_auth->is_super_admin() || 
								$this->ion_auth->is_customer_service() ||
								$this->ion_auth->is_marketing() ||
								$this->ion_auth->is_warehouse()): ?>
							<ul class="pcoded-item pcoded-left-item">
								<li class="pcoded-hasmenu">
									<a href="javascript:void(0)">
										<span class="pcoded-micon"><i class="icofont icofont-people"></i></span>
										<span class="pcoded-mtext"><?= __('shippers_management'); ?></span>
									</a>
									<ul class="pcoded-submenu">
										<li>
											<a href="/shippers">
												<span class="pcoded-mtext"><?= __('all_shippers'); ?></span>
											</a>
										</li>
										<li>
											<a href="/shippers/active">
												<span class="pcoded-mtext"><?= __('active'); ?></span>
											</a>
										</li>
										<li>
											<a href="/shippers/available">
												<span class="pcoded-mtext"><?= __('available'); ?></span>
											</a>
										</li>
										<li>
											<a href="/shippers/pending">
												<span class="pcoded-mtext"><?= __('pending_approval'); ?></span>
											</a>
										</li>
										<li>
											<a href="/shippers/approved">
												<span class="pcoded-mtext"><?= __('approved_shippers'); ?></span>
											</a>
										</li>
										<li>
											<a href="/shippers/banned">
												<span class="pcoded-mtext"><?= __('banned_shippers'); ?></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('guidelines'); ?></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('faq'); ?></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('contracts'); ?></span>
											</a>
										</li>
									</ul>
								</li>
							</ul>
						<?php endif; ?>
						<?php if ($this->ion_auth->is_super_admin() || 
								$this->ion_auth->is_customer_service() ||
								$this->ion_auth->is_marketing() ||
								$this->ion_auth->is_warehouse()): ?>
							<ul class="pcoded-item pcoded-left-item">
								<li class="pcoded-hasmenu">
									<a href="javascript:void(0)">
										<span class="pcoded-micon"><i class="icofont icofont-users-alt-1"></i></span>
										<span class="pcoded-mtext"><?= __('sellers_management'); ?> </span>
									</a>
									<ul class="pcoded-submenu">
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('all_sellers'); ?></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('pending_approval'); ?></span>
											</a>
										</li> 
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('approved_sellers'); ?></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('banned_sellers'); ?></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('sellers_requests'); ?></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('guidelines'); ?></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('faq'); ?></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('contracts'); ?></span>
											</a>
										</li>
									</ul>
								</li>
							</ul>
						<?php endif; ?>
						<?php if ($this->ion_auth->is_super_admin() || 
								$this->ion_auth->is_marketing() ||
								$this->ion_auth->is_warehouse()): ?>
							<ul class="pcoded-item pcoded-left-item">
								<li class="pcoded-hasmenu">
									<a href="javascript:void(0)">
										<span class="pcoded-micon"><i class="feather icon-package"></i></span>
										<span class="pcoded-mtext"><?= __('products'); ?></span>
									</a>
									<ul class="pcoded-submenu">
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('all_products'); ?></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('approved_products'); ?></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('pending_approval'); ?></span>
											</a>
										</li> 
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('expected_products'); ?></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('rejected_products'); ?></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('returned_products'); ?></span>
											</a>
										</li> 
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('out_of_stock_products'); ?></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('fulfillment_pricing'); ?></span>
											</a>
										</li>
									</ul>
								</li>
							</ul>
						<?php endif; ?>
						<?php if ($this->ion_auth->is_super_admin() || $this->ion_auth->is_warehouse()): ?>
							<ul class="pcoded-item pcoded-left-item">
								<li class="pcoded-hasmenu">
									<a href="javascript:void(0)">
										<span class="pcoded-micon"><i class="feather icon-list"></i></span>
										<span class="pcoded-mtext"><?= __('inventory'); ?></span>
									</a>
									<ul class="pcoded-submenu">
									<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('warehouses'); ?></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('stock_movement'); ?></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('stock_transfer'); ?></span>
											</a>
										</li> 
									</ul>
								</li>
							</ul>
						<?php endif; ?>
						<?php if ($this->ion_auth->is_super_admin() || $this->ion_auth->is_warehouse()): ?>
							<ul class="pcoded-item pcoded-left-item">
								<li class="pcoded-hasmenu">
									<a href="javascript:void(0)">
										<span class="pcoded-micon"><i class="feather icon-shopping-cart"></i></span>
										<span class="pcoded-mtext"><?= __('purchasing'); ?></span>
									</a>
									<ul class="pcoded-submenu">
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('suppliers'); ?></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('purchase_orders'); ?></span>
											</a>
										</li> 
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('replenishment'); ?></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('product_order_association'); ?></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('auto_generated_purshase_orders'); ?></span>
											</a>
										</li> 
									</ul>
								</li>
							</ul>
						<?php endif; ?>
						<?php if($this->ion_auth->is_super_admin() || $this->ion_auth->is_accounting()): ?>
							<ul class="pcoded-item pcoded-left-item">
								<li class="pcoded-hasmenu">
									<a href="javascript:void(0)">
										<span class="pcoded-micon"><i class="feather icon-file-text"></i></span>
										<span class="pcoded-mtext"><?= __('accounting'); ?></span>
									</a>
									<ul class="pcoded-submenu">
										<li>
											<a href="/accounting/transactions">
												<span class="pcoded-mtext"><?= __('transactions'); ?></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('cost_of_goods_sold'); ?></span>
											</a>
										</li>
										<li>
											<a href="/accounting">
												<span class="pcoded-mtext"><?= __('accounted_invoices'); ?></span>
											</a>
										</li> 
										<li>
											<a href="accounting/creditMemo">
												<span class="pcoded-mtext"><?= __('customers_credit_memos'); ?></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('purchase_payments'); ?></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('sellers_payments'); ?></span>
											</a>
										</li> 
										<li>
											<a href="/accounting/shippersPayments">
												<span class="pcoded-mtext"><?= __('shippers_payments'); ?></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('accounting_export'); ?></span>
											</a>
										</li>
									</ul>
								</li>
							</ul>
						<?php endif; ?>
						<?php if ($this->ion_auth->is_super_admin()): ?>
							<ul class="pcoded-item pcoded-left-item">
								<li class="pcoded-hasmenu">
									<a href="javascript:void(0)">
										<span class="pcoded-micon"><i class="feather icon-briefcase"></i></span>
										<span class="pcoded-mtext"><?= __('treasury'); ?></span>
									</a>
									<ul class="pcoded-submenu">
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('funds'); ?></span>
											</a>
										</li>
									</ul>
								</li>
							</ul>
						<?php endif; ?>
						<?php if ($this->ion_auth->is_super_admin() || $this->ion_auth->is_marketing()): ?>
							<ul class="pcoded-item pcoded-left-item">
								<li class="pcoded-hasmenu">
									<a href="javascript:void(0)">
										<span class="pcoded-micon"><i class="feather icon-target"></i></span>
										<span class="pcoded-mtext"><?= __('marketing'); ?></span>
									</a>
									<ul class="pcoded-submenu">
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('products_pending_boost'); ?></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('high_margin_products'); ?></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('critical_dates'); ?></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('high_stock'); ?></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('audience'); ?></span>
											</a>
										</li>
									</ul>
								</li>
							</ul>
						<?php endif; ?>
						<?php if ($this->ion_auth->is_super_admin() || 
								$this->ion_auth->is_customer_service() ||
								$this->ion_auth->is_marketing()): ?>
							<ul class="pcoded-item pcoded-left-item">
								<li class="pcoded-hasmenu">
									<a href="javascript:void(0)">
										<span class="pcoded-micon"><i class="feather icon-sliders"></i></span>
										<span class="pcoded-mtext"><?= __('configuration'); ?></span>
									</a>
									<ul class="pcoded-submenu">
										<li>
											<a href="/users">
												<span class="pcoded-mtext"><?= __('users_management'); ?></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('processes'); ?></span>
											</a>
										</li>
										<li>
											<a href="/macros">
												<span class="pcoded-mtext"><?= __('macros'); ?></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('sms_templates'); ?></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="pcoded-mtext"><?= __('email_templates'); ?></span>
											</a>
										</li>
									</ul>
								</li>
							</ul>
						<?php endif; ?>
                    </div>
                </nav>
<div class="pcoded-content">
<div class="pcoded-inner-content">
<div class="main-body">
<div class="page-wrapper">

