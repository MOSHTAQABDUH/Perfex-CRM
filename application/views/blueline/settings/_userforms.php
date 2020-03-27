<style>
    @media (max-width: 767px) {
        .content-area {
            padding: 0;
        }

        .row.mainnavbar {
            margin-bottom: 0px;
            margin-right: 0px;
        }
    }
    .labelauty-unchecked{
        width: 58% !important;
    }
    .panel-default > .panel-heading {
        background-color: white;
        border-color: white;
        padding-top: 14px;
        padding-left: 15px;
    }

    .labelauty-checked {
        width: 80% !important;
    }

</style>

<div class="grid">
    <div class="grid__col-md-7 dashboard-header">
        <h1><?= sprintf( $this->lang->line( 'application_welcome_back' ),
				$this->user->firstname ); ?></h1>
        <small><?= sprintf( $this->lang->line( 'application_welcome_subline' ),
				$messages_new[0]->amount,
				$event_count_for_today ); ?></small>
    </div>
    <div class="grid__col-md-5 dashboard-header hidden-xs">
        <div class="grid grid--bleed grid--justify-end">
            <div class="grid__col-4 grid__col-lg-3 grid--align-self-center">
                <h6><?= $this->lang->line( 'application_tasks' ); ?></h6>
                <h2><?= count( $tasks ); ?></h2>
            </div>
			<?php if ( $tickets_access ) { ?>
                <div class="grid__col-4 grid__col-lg-3 grid--align-self-center">
                    <h6><?= $this->lang->line( 'application_tickets' ); ?></h6>
                    <h2><?= $ticketcounter; ?>0</h2>
                </div>
			<?php } ?>
            <div class="grid__col-4 grid__col-lg-3 grid--align-self-center">
                <h6><?= $this->lang->line( 'application_clients' ); ?></h6>
                <h2><?= $clientcounter; ?>0</h2>
            </div>
        </div>
    </div>

    <div class="grid__col-sm-12 grid__col-md-4 grid__col-lg-3 grid__col--bleed">
        <div class="grid grid--align-content-start">

            <div class="grid__col-12 ">
                <div class="stdpad box-shadow">
                    <div class="table-head">
                        <span><?= $this->lang->line( 'application_agent' ); ?></span>
                        <a href="<?= base_url() ?>agents/user_update/<?= $user->id; ?>" data-toggle="mainmodal"
                           class="btn-option" style="float: right;">
                            <i class="icon dripicons-gear"></i>
                        </a>
                    </div>
                    <div id="main-nano-wrapper" class="nano">
                        <img src=<?=$user->userpic;?> width="100%" height="296px;">
                    </div>
                </div>
            </div>

            <div class="grid__col-12">
				<?php if ( isset( $message ) ) { ?>
                    <div class="stdpad box-shadow">
                        <div class="table-head"><?= $this->lang->line( 'application_recent_messages' ); ?></div>

                        <ul class="dash-messages">
							<?php foreach ( $message as $value ): ?>
                                <li>
                                    <a href="<?= base_url() ?>messages">
                                        <img class="userpic img-circle" src="
                                              <?php
										if ( $value->userpic_u ) {
											echo get_user_pic( $value->userpic_u,
												$value->email_u );
										} else {
											echo get_user_pic( $value->userpic_c,
												$value->email_c );
										}
										?>
                                              "/>
                                        <div class="pull-left"
                                             style="width: 78%;">
                                            <p class="dash-messages__header truncate">
												<?php if ( $value->status
												           == "New"
												) {
													echo '<span class="new"><i class="icon dripicons-mail"></i></span>';
												} ?>
												<?= $value->subject; ?>
                                            </p>
                                            <p class="dash-messages__name">
												<?php if ( $value->sender_u ) {
													echo $value->sender_u;
												} else {
													echo $value->sender_c;
												} ?>
                                            </p>
                                        </div>
                                        <br clear="all">
                                        <!-- <small><?php echo time_ago( $value->time ); ?></small> -->
                                        <p class="dash-messages__body">
											<?= character_limiter( str_replace( array(
												"\r\n",
												"\r",
												"\n",
											),
												"",
												strip_tags( $value->message ) ),
												70 ); ?>
                                        </p>
                                    </a>
                                </li>
							<?php endforeach; ?>
							<?php if ( empty( $message ) ) { ?>
                                <div class="empty">
                                    <i class="ion-ios-chatbubble"></i><br>
									<?= $this->lang->line( 'application_no_messages' ); ?>
                                </div>
							<?php } ?>
                        </ul>
                        <br/>
                    </div>
				<?php } ?>
            </div>
        </div>
    </div>
    <div class="grid__col-sm-12 grid__col-md-8 grid__col-lg-9 grid__col--bleed">
        <div class="grid grid--align-content-start">
			<?php if ( $this->user->admin == "1" ) { ?>
                <div class="grid__col-12 update-panel">
                    <div class="tile-base box-shadow">
                        <div class="panel-heading red"><span
                                    class="title red"><?= $this->lang->line( 'application_update_available' ); ?></span><span
                                    id="hideUpdate" class="pull-right"><i
                                        class="ion-close"></i></span></div>
                        <div class="panel-content"><h2><a
                                        href="<?= base_url() ?>settings/updates"><?= $this->lang->line( 'application_new_update_is_ready' ); ?></a>
                            </h2></div>
                        <div class="panel-footer">Version <span
                                    id="versionnumber"></span></div>
                    </div>
                </div>

                <div class="grid__col-6 grid__col-xs-6 grid__col-sm-6 grid__col-md-6 grid__col-lg-3">
                    <div class="tile-base box-shadow tile-with-icon">
                        <div class="tile-icon hidden-md hidden-xs"><i
                                    class="ion-ios-analytics-outline"></i></div>
                        <div class="tile-small-header">
							<?= $this->lang->line( 'application_'
							                       . $month ); ?> <?= $this->lang->line( 'application_payments' ); ?>
                        </div>
                        <div class="tile-body">
                            <div class="number"
                                 id="number1"><?php if ( empty( $payments ) ) {
									echo display_money( 0,
										$core_settings->currency,
										0 );
								} else {
									echo display_money( $payments,
										$core_settings->currency );
								} ?></div>
                        </div>
                        <div class="tile-bottom">
                            <div class="progress tile-progress tt"
                                 title="<?= display_money( $payments ); ?> / <?= display_money( $paymentsOutstandingMonth ); ?>">
                                <div class="progress-bar" role="progressbar"
                                     aria-valuenow="<?= $paymentsForThisMonthInPercent ?>"
                                     aria-valuemin="0" aria-valuemax="100"
                                     style="width: <?= $paymentsForThisMonthInPercent ?>%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid__col-6 grid__col-xs-6 grid__col-sm-6 grid__col-md-6 grid__col-lg-3">
                    <div class="tile-base box-shadow">
                        <div class="tile-icon hidden-md hidden-xs">
                            <i class="ion-ios-information-outline"></i>
                        </div>
                        <div class="tile-small-header">
							<?= $this->lang->line( 'application_total_outstanding' ); ?>
                        </div>
                        <div class="tile-body">
                            <div class="number"
                                 id="number2"><?php if ( empty( $paymentsoutstanding ) ) {
									echo display_money( 0,
										$core_settings->currency,
										0 );
								} else {
									echo display_money( $paymentsoutstanding,
										$core_settings->currency );
								} ?></div>
                        </div>
                        <div class="tile-bottom">
                            <div class="progress tile-progress tile-progress--red tt"
                                 title="<?= display_money( $totalIncomeForYear ); ?> / <?= display_money( $paymentsoutstanding ); ?>">
                                <div class="progress-bar" role="progressbar"
                                     aria-valuenow="<?= $paymentsOutstandingPercent ?>"
                                     aria-valuemin="0" aria-valuemax="100"
                                     style="width: <?= $paymentsOutstandingPercent ?>%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid__col-6 grid__col-xs-6 grid__col-sm-6  grid__col-md-6 grid__col-lg-3">
                    <a href="<?= base_url(); ?>projects/filter/open"
                       class="tile-base box-shadow">
                        <div class="tile-icon hidden-md hidden-xs"><i
                                    class="ion-ios-lightbulb-outline"></i></div>
                        <div class="tile-small-header"><?= $this->lang->line( 'application_open_projects' ); ?></div>
                        <div class="tile-body">
							<?= $projects_open; ?>
                            <small> / <?= $projects_all; ?></small>
                        </div>
                        <div class="tile-bottom">
                            <div class="progress tile-progress tile-progress--green">
                                <div class="progress-bar" role="progressbar"
                                     aria-valuenow="<?= $openProjectsPercent ?>"
                                     aria-valuemin="0" aria-valuemax="100"
                                     style="width: <?= $openProjectsPercent ?>%"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid__col-6 grid__col-xs-6 grid__col-sm-6 grid__col-md-6 grid__col-lg-3">
                    <a href="<?= base_url(); ?>invoices/filter/open"
                       class="tile-base box-shadow">
                        <div class="tile-icon hidden-md hidden-xs"><i
                                    class="ion-ios-paper-outline"></i></div>
                        <div class="tile-small-header"><?= $this->lang->line( 'application_open_invoices' ); ?></div>
                        <div class="tile-body">
							<?= $invoices_open; ?>
                            <small> / <?= $invoices_all; ?></small>
                        </div>
                        <div class="tile-bottom">
                            <div class="progress tile-progress tile-progress--orange">
                                <div class="progress-bar" role="progressbar"
                                     aria-valuenow="<?= $openInvoicePercent ?>"
                                     aria-valuemin="0" aria-valuemax="100"
                                     style="width: <?= $openInvoicePercent ?>%"></div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="grid__col-12">
                    <div class="tile-base box-shadow no-padding">
                        <div class="tile-extended-header">
                            <div class="grid tile-extended-header">
                                <div class="grid__col-4">
                                    <h5><?= $this->lang->line( 'application_statistics' ); ?> </h5>
                                    <div class="btn-group">
                                        <button type="button"
                                                class="tile-year-selector dropdown-toggle"
                                                data-toggle="dropdown">
											<?= $year; ?> <i
                                                    class="ion-ios-arrow-down"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu--small"
                                            role="menu">
                                            <li>
                                                <a href="<?= base_url() ?>dashboard/year/<?= date( "Y" ); ?>"><?= date( "Y" ); ?></a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url() ?>dashboard/year/<?= date( "Y" )
												                                             - 1; ?>"><?= date( "Y" )
												                                                          - 1; ?></a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url() ?>dashboard/year/<?= date( "Y" )
												                                             - 2; ?>"><?= date( "Y" )
												                                                          - 2; ?></a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url() ?>dashboard/year/<?= date( "Y" )
												                                             - 3; ?>"><?= date( "Y" )
												                                                          - 3; ?></a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url() ?>dashboard/year/<?= date( "Y" )
												                                             - 4; ?>"><?= date( "Y" )
												                                                          - 4; ?></a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url() ?>dashboard/year/<?= date( "Y" )
												                                             - 5; ?>"><?= date( "Y" )
												                                                          - 5; ?></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="grid__col-8">
                                    <div class="grid grid--bleed grid--justify-end">
                                        <div class="grid__col-md-3 tile-text-right">
                                            <h5><?= $this->lang->line( 'application_income' ); ?></h5>
                                            <h1><?= display_money( $totalIncomeForYear,
													false ); ?></h1>
                                        </div>
                                        <div class="grid__col-md-3 tile-text-right tile-negative">
                                            <h5><?= $this->lang->line( 'application_expenses' ); ?></h5>
                                            <h1><?= display_money( $totalExpenses,
													false ); ?></h1>
                                        </div>
                                        <div class="grid__col-md-3 tile-text-right tile-positive">
                                            <h5><?= $this->lang->line( 'application_profit' ); ?></h5>
                                            <h1><?= display_money( $totalProfit,
													false ); ?></h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__col-12 grid__col--bleed grid--align-self-end">
                                    <div class="tile-body">
                                        <canvas id="tileChart" width="auto"
                                                height="70"
                                                style="margin-bottom: -5px;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <?php } ?>

            <div class="grid__col-12">
				<?php if ( isset( $tasks ) ) { ?>
                    <div class="stdpad box-shadow">
                        <div class="table-head"><?= $this->lang->line( 'application_my_open_tasks' ); ?></div>
                        <div id="main-nano-wrapper" class="nano">
                            <div class="nano-content">
                                <ul id="jp-container" class="todo jp-container">
									<?php
									$count = 0;
									$projectname = "";
									foreach ( $tasks as $value ):
										$count = $count + 1;
										if ( is_object( $value->project )
										     && $projectname
										        != $value->project->name
										) {
											$projectname =
												$value->project->name;
											echo "<h5>" . $projectname
											     . "</h5>";
										}
										?>
                                        <li class="<?= $value->status; ?> priority<?= $value->priority; ?> list-item">
                                        <span class="lbl-">
                                            <p class="truncate"><input
                                                        name="form-field-checkbox"
                                                        type="checkbox"
                                                        class="checkbox-nolabel task-check"
                                                        data-link="<?= base_url() ?>projects/tasks/<?= $value->project_id; ?>/check/<?= $value->id; ?>" <?= $value->status; ?>/>
                                                <a href="<?= base_url() ?>projects/view/<?= $value->project_id; ?>"><?= $value->name; ?></a>
                                            </p>
                                        </span>
                                            <span class="pull-right hidden-xs"
                                                  style="margin-top: -43px;">
                                              <?php if ( $value->public
                                                         != 0
                                              ) { ?><span class="list-button"><i
                                                          class="icon dripicons-preview tt"
                                                          title=""
                                                          data-original-title="<?= $this->lang->line( 'application_task_public' ); ?>"></i>
                                                  </span><?php } ?>
                                              <a href="<?= base_url() ?>projects/tasks/<?= $value->project_id; ?>/update/<?= $value->id; ?>"
                                                 class="edit-button"
                                                 data-toggle="mainmodal"><i
                                                          class="icon dripicons-gear"></i></a>
                                        </span>
                                        </li>
									<?php
									endforeach;
									if ( $count == 0 ) { ?>
                                        <div class="empty">
                                            <i class="ion-checkmark-round"></i><br>
											<?= $this->lang->line( 'application_no_tasks_yet' ); ?>
                                        </div>
									<?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
				<?php } ?>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-13  col-md-12 main">
    <div class="row">
        <div class="col-md-12">
            <a href="<?= base_url() ?>agents/document_create" class="btn btn-primary"
               data-toggle="mainmodal"><?= $this->lang->line( 'application_create_new_document' ); ?></a>
            <div class="btn-group pull-right-responsive margin-right-3">
                <button id="bulk-button" type="button"
                        class="btn btn-default dropdown-toggle"
                        data-toggle="dropdown">
			        <?= $this->lang->line( 'application_bulk_actions' ); ?> <span
                            class="caret"></span>
                </button>
                <ul class="dropdown-menu pull-right bulk-dropdown" role="menu">
                    <li data-action="valid">
                        <a id="" href="#"><?= $this->lang->line( 'application_close' ); ?></a>
                    </li>
                    <li data-action="refuse">
                        <a id="" href="#"><?= $this->lang->line( 'application_refuse' ); ?></a>
                    </li>
                    <li data-action="delete">
                        <a id="" href="#"><?= $this->lang->line( 'application_delete' ); ?></a>
                    </li>
                </ul>
		        <?php
		        $form_action = base_url() . 'tickets/bulk/';
		        $attributes  = [ 'class' => '', 'id' => 'bulk-form' ];
		        echo form_open( $form_action, $attributes ); ?>
                <input type="hidden" name="list" id="list-data"/>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-head"><?= $this->lang->line( 'application_document' ); ?></div>
            <div class="table-div">
                <table class="data-sorting table" id="tickets"
                       rel="<?= base_url() ?>" cellspacing="0" cellpadding="0">
                    <thead>
                    <th class="hidden-xs no_sort simplecheckbox"
                        style="width:16px"><input class="checkbox-nolabel"
                                                  type="checkbox" id="checkAll"
                                                  name="selectall" value="">
                    </th>
                    <th class="hidden-xs"><?= $this->lang->line( 'application_document_id' ); ?></th>
                    <th><?= $this->lang->line( 'application_name' ); ?></th>
                    <th><?= $this->lang->line( 'application_update_date' ); ?></th>
                    <th><?= $this->lang->line( 'application_action' ); ?></th>
                    </thead>
                </table>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="<?= base_url() ?>tickets/create" class="btn btn-primary"
               data-toggle="mainmodal"><?= $this->lang->line( 'application_create_new_ticket' ); ?></a>
            <div class="btn-group pull-right-responsive margin-right-3">
                <button type="button" class="btn btn-primary dropdown-toggle"
                        data-toggle="dropdown">
					<?php if ( isset( $activeQueue ) ) {
						echo $activeQueue->name;
					} else {
						echo $this->lang->line( 'application_queue' );
					} ?>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><a id=""
                           href="<?= base_url() ?>tickets/"><?= $this->lang->line( 'application_all' ); ?></a>
                    </li>
					<?php foreach ( $queues as $value ): ?>
                        <li><a id=""
                               href="<?= base_url() ?>tickets/queues/<?= $value->id ?>" <?php if ( $this->user->queue == $value->id
							) {
								echo 'style="font-weight: bold;"';
							} ?>><?= $value->name ?></a></li>
					<?php endforeach; ?>

                </ul>
            </div>
            <div class="btn-group pull-right-responsive margin-right-3">
                <button type="button" class="btn btn-primary dropdown-toggle"
                        data-toggle="dropdown">
					<?php if ( isset( $ticketFilter ) ) {
						echo $ticketFilter;
					} ?> <span class="caret"></span>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
					<?php foreach ( $submenu as $name => $value ): ?>
                        <li><a id="<?php $val_id = explode( '/', $value );
							if ( ! is_numeric( end( $val_id ) ) ) {
								echo end( $val_id );
							} else {
								$num = count( $val_id ) - 2;
								echo $val_id[ $num ];
							} ?>" href="<?= site_url( $value ); ?>"><?= $name ?></a>
                        </li>
					<?php endforeach; ?>

                </ul>
            </div>
            <div class="btn-group pull-right-responsive margin-right-3 hidden-xs">
                <button id="bulk-button" type="button"
                        class="btn btn-default dropdown-toggle"
                        data-toggle="dropdown">
					<?= $this->lang->line( 'application_bulk_actions' ); ?> <span
                            class="caret"></span>
                </button>
                <ul class="dropdown-menu pull-right bulk-dropdown" role="menu">

                    <li data-action="close"><a id=""
                                               href="#"><?= $this->lang->line( 'application_close' ); ?></a>
                    </li>


                </ul>
				<?php
				$form_action = base_url() . 'tickets/bulk/';
				$attributes  = [ 'class' => '', 'id' => 'bulk-form' ];
				echo form_open( $form_action, $attributes ); ?>
                <input type="hidden" name="list" id="list-data"/>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-head"><?= $this->lang->line( 'application_tickets' ); ?></div>
            <div class="table-div">
                <table class="data-sorting table" id="tickets"
                       rel="<?= base_url() ?>" cellspacing="0" cellpadding="0">
                    <thead>
                    <th class="hidden-xs no_sort simplecheckbox"
                        style="width:16px"><input class="checkbox-nolabel"
                                                  type="checkbox" id="checkAll"
                                                  name="selectall" value="">
                    </th>
                    <th class="hidden-xs"
                        style="width:70px"><?= $this->lang->line( 'application_ticket_id' ); ?></th>
                    <th style="width:50px"><?= $this->lang->line( 'application_status' ); ?></th>
                    <th class="hidden-xs no_sort"
                        style="width:5px; padding-right: 5px;"><i
                                class="icon dripicons-star"></i></th>
                    <th><?= $this->lang->line( 'application_subject' ); ?></th>
                    <th class="hidden-xs"><?= $this->lang->line( 'application_last_reply' ) ?></th>
                    <th class="hidden-xs"><?= $this->lang->line( 'application_queue' ); ?></th>
                    <th class="hidden-xs"><?= $this->lang->line( 'application_client' ); ?></th>
                    <th class="hidden-xs"><?= $this->lang->line( 'application_owner' ); ?></th>
                    </thead>
					<?php foreach ( $ticket as $value ): ?>
						<?php $lable = false;
						if ( $value->status == 'new' ) {
							$lable = 'label-important';
						} elseif ( $value->status == 'open' ) {
							$lable = 'label-warning';
						} elseif ( $value->status == 'closed'
						           || $value->status == 'inprogress'
						) {
							$lable = 'label-success';
						} elseif ( $value->status == 'reopened' ) {
							$lable = 'label-warning';
						} ?>
                        <tr id="<?= $value->id; ?>">
                            <td class="hidden-xs noclick simplecheckbox"
                                style="width:16px"><input
                                        class="checkbox-nolabel bulk-box"
                                        type="checkbox" name="bulk[]"
                                        value="<?= $value->id ?>"></td>
                            <td class="hidden-xs"
                                style="width:70px"><?= $value->reference; ?></td>
                            <td style="width:50px"><span
                                        class="label <?php echo $lable; ?>"><?= $this->lang->line( 'application_ticket_status_'
							                                                                       . $value->status ); ?></span>
                            </td>
							<?php if ( is_object( $value->user ) ) {
								$user_id = $value->user->id;
							} else {
								$user_id = false;
							} ?>
                            <td class="hidden-xs"
                                style="width:15px"><?php if ( $value->updated == 1 && $user_id == $this->user->id) {
									?><i class="icon dripicons-star"
                                         style="color: #d48b2a;"></i><?php
								} else {
									?> <i class="icon dripicons-star"
                                          style="opacity: 0.2;"></i><?php
								} ?></td>
                            <td><?= $value->subject; ?></td>
                            <td class="hidden-xs"><?php if ( is_object( $value->getLastArticle() ) ) : ?>
                                    <span class="hidden"><?= $value->getLastArticle()->datetime ?></span> <?= date( $core_settings->date_format
									                                                                                . ' '
									                                                                                . $core_settings->date_time_format,
										$value->getLastArticle()->datetime ) ?><?php endif; ?>
                            </td>
                            <td class="hidden-xs"><span><?php if ( is_object( $value->queue ) ) {
										echo $value->queue->name;
									} ?></span></td>
                            <td class="hidden-xs"><?php if ( ! is_object( $value->company ) ) {
									echo '<span class="label">'
									     . $this->lang->line( 'application_no_client_assigned' )
									     . '</span>';
								} else {
									echo '<span class="label label-info">'
									     . $value->company->name . '</span>';
								} ?></td>
                            <td class="hidden-xs"><?php if ( ! is_object( $value->user ) ) {
									echo '<span class="label">'
									     . $this->lang->line( 'application_not_assigned' )
									     . '</span>';
								} else {
									echo '<span class="label label-info">'
									     . $value->user->firstname . ' '
									     . $value->user->lastname . '</span>';
								} ?></td>

                        </tr>

					<?php endforeach; ?>
                </table>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="<?= base_url() ?>tickets/create" class="btn btn-primary"
               data-toggle="mainmodal"><?= $this->lang->line( 'application_create_new_ticket' ); ?></a>
            <div class="btn-group pull-right-responsive margin-right-3">
                <button type="button" class="btn btn-primary dropdown-toggle"
                        data-toggle="dropdown">
					<?php if ( isset( $activeQueue ) ) {
						echo $activeQueue->name;
					} else {
						echo $this->lang->line( 'application_queue' );
					} ?>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><a id=""
                           href="<?= base_url() ?>tickets/"><?= $this->lang->line( 'application_all' ); ?></a>
                    </li>
					<?php foreach ( $queues as $value ): ?>
                        <li><a id=""
                               href="<?= base_url() ?>tickets/queues/<?= $value->id ?>" <?php if ( $this->user->queue == $value->id
							) {
								echo 'style="font-weight: bold;"';
							} ?>><?= $value->name ?></a></li>
					<?php endforeach; ?>

                </ul>
            </div>
            <div class="btn-group pull-right-responsive margin-right-3">
                <button type="button" class="btn btn-primary dropdown-toggle"
                        data-toggle="dropdown">
					<?php if ( isset( $ticketFilter ) ) {
						echo $ticketFilter;
					} ?> <span class="caret"></span>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
					<?php foreach ( $submenu as $name => $value ): ?>
                        <li><a id="<?php $val_id = explode( '/', $value );
							if ( ! is_numeric( end( $val_id ) ) ) {
								echo end( $val_id );
							} else {
								$num = count( $val_id ) - 2;
								echo $val_id[ $num ];
							} ?>" href="<?= site_url( $value ); ?>"><?= $name ?></a>
                        </li>
					<?php endforeach; ?>

                </ul>
            </div>
            <div class="btn-group pull-right-responsive margin-right-3 hidden-xs">
                <button id="bulk-button" type="button"
                        class="btn btn-default dropdown-toggle"
                        data-toggle="dropdown">
					<?= $this->lang->line( 'application_bulk_actions' ); ?> <span
                            class="caret"></span>
                </button>
                <ul class="dropdown-menu pull-right bulk-dropdown" role="menu">

                    <li data-action="close"><a id=""
                                               href="#"><?= $this->lang->line( 'application_close' ); ?></a>
                    </li>


                </ul>
				<?php
				$form_action = base_url() . 'tickets/bulk/';
				$attributes  = [ 'class' => '', 'id' => 'bulk-form' ];
				echo form_open( $form_action, $attributes ); ?>
                <input type="hidden" name="list" id="list-data"/>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-head"><?= $this->lang->line( 'application_tickets' ); ?></div>
            <div class="table-div">
                <table class="data-sorting table" id="tickets"
                       rel="<?= base_url() ?>" cellspacing="0" cellpadding="0">
                    <thead>
                    <th class="hidden-xs no_sort simplecheckbox"
                        style="width:16px"><input class="checkbox-nolabel"
                                                  type="checkbox" id="checkAll"
                                                  name="selectall" value="">
                    </th>
                    <th class="hidden-xs"
                        style="width:70px"><?= $this->lang->line( 'application_ticket_id' ); ?></th>
                    <th style="width:50px"><?= $this->lang->line( 'application_status' ); ?></th>
                    <th class="hidden-xs no_sort"
                        style="width:5px; padding-right: 5px;"><i
                                class="icon dripicons-star"></i></th>
                    <th><?= $this->lang->line( 'application_subject' ); ?></th>
                    <th class="hidden-xs"><?= $this->lang->line( 'application_last_reply' ) ?></th>
                    <th class="hidden-xs"><?= $this->lang->line( 'application_queue' ); ?></th>
                    <th class="hidden-xs"><?= $this->lang->line( 'application_client' ); ?></th>
                    <th class="hidden-xs"><?= $this->lang->line( 'application_owner' ); ?></th>
                    </thead>
					<?php foreach ( $ticket as $value ): ?>
						<?php $lable = false;
						if ( $value->status == 'new' ) {
							$lable = 'label-important';
						} elseif ( $value->status == 'open' ) {
							$lable = 'label-warning';
						} elseif ( $value->status == 'closed'
						           || $value->status == 'inprogress'
						) {
							$lable = 'label-success';
						} elseif ( $value->status == 'reopened' ) {
							$lable = 'label-warning';
						} ?>
                        <tr id="<?= $value->id; ?>">
                            <td class="hidden-xs noclick simplecheckbox"
                                style="width:16px"><input
                                        class="checkbox-nolabel bulk-box"
                                        type="checkbox" name="bulk[]"
                                        value="<?= $value->id ?>"></td>
                            <td class="hidden-xs"
                                style="width:70px"><?= $value->reference; ?></td>
                            <td style="width:50px"><span
                                        class="label <?php echo $lable; ?>"><?= $this->lang->line( 'application_ticket_status_'
							                                                                       . $value->status ); ?></span>
                            </td>
							<?php if ( is_object( $value->user ) ) {
								$user_id = $value->user->id;
							} else {
								$user_id = false;
							} ?>
                            <td class="hidden-xs"
                                style="width:15px"><?php if ( $value->updated == 1 && $user_id == $this->user->id) {
									?><i class="icon dripicons-star"
                                         style="color: #d48b2a;"></i><?php
								} else {
									?> <i class="icon dripicons-star"
                                          style="opacity: 0.2;"></i><?php
								} ?></td>
                            <td><?= $value->subject; ?></td>
                            <td class="hidden-xs"><?php if ( is_object( $value->getLastArticle() ) ) : ?>
                                    <span class="hidden"><?= $value->getLastArticle()->datetime ?></span> <?= date( $core_settings->date_format
									                                                                                . ' '
									                                                                                . $core_settings->date_time_format,
										$value->getLastArticle()->datetime ) ?><?php endif; ?>
                            </td>
                            <td class="hidden-xs"><span><?php if ( is_object( $value->queue ) ) {
										echo $value->queue->name;
									} ?></span></td>
                            <td class="hidden-xs"><?php if ( ! is_object( $value->company ) ) {
									echo '<span class="label">'
									     . $this->lang->line( 'application_no_client_assigned' )
									     . '</span>';
								} else {
									echo '<span class="label label-info">'
									     . $value->company->name . '</span>';
								} ?></td>
                            <td class="hidden-xs"><?php if ( ! is_object( $value->user ) ) {
									echo '<span class="label">'
									     . $this->lang->line( 'application_not_assigned' )
									     . '</span>';
								} else {
									echo '<span class="label label-info">'
									     . $value->user->firstname . ' '
									     . $value->user->lastname . '</span>';
								} ?></td>

                        </tr>

					<?php endforeach; ?>
                </table>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="<?= base_url() ?>tickets/create" class="btn btn-primary"
               data-toggle="mainmodal"><?= $this->lang->line( 'application_create_new_ticket' ); ?></a>
            <div class="btn-group pull-right-responsive margin-right-3">
                <button type="button" class="btn btn-primary dropdown-toggle"
                        data-toggle="dropdown">
					<?php if ( isset( $activeQueue ) ) {
						echo $activeQueue->name;
					} else {
						echo $this->lang->line( 'application_queue' );
					} ?>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><a id=""
                           href="<?= base_url() ?>tickets/"><?= $this->lang->line( 'application_all' ); ?></a>
                    </li>
					<?php foreach ( $queues as $value ): ?>
                        <li><a id=""
                               href="<?= base_url() ?>tickets/queues/<?= $value->id ?>" <?php if ( $this->user->queue == $value->id
							) {
								echo 'style="font-weight: bold;"';
							} ?>><?= $value->name ?></a></li>
					<?php endforeach; ?>

                </ul>
            </div>
            <div class="btn-group pull-right-responsive margin-right-3">
                <button type="button" class="btn btn-primary dropdown-toggle"
                        data-toggle="dropdown">
					<?php if ( isset( $ticketFilter ) ) {
						echo $ticketFilter;
					} ?> <span class="caret"></span>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
					<?php foreach ( $submenu as $name => $value ): ?>
                        <li><a id="<?php $val_id = explode( '/', $value );
							if ( ! is_numeric( end( $val_id ) ) ) {
								echo end( $val_id );
							} else {
								$num = count( $val_id ) - 2;
								echo $val_id[ $num ];
							} ?>" href="<?= site_url( $value ); ?>"><?= $name ?></a>
                        </li>
					<?php endforeach; ?>

                </ul>
            </div>
            <div class="btn-group pull-right-responsive margin-right-3 hidden-xs">
                <button id="bulk-button" type="button"
                        class="btn btn-default dropdown-toggle"
                        data-toggle="dropdown">
					<?= $this->lang->line( 'application_bulk_actions' ); ?> <span
                            class="caret"></span>
                </button>
                <ul class="dropdown-menu pull-right bulk-dropdown" role="menu">

                    <li data-action="close"><a id=""
                                               href="#"><?= $this->lang->line( 'application_close' ); ?></a>
                    </li>


                </ul>
				<?php
				$form_action = base_url() . 'tickets/bulk/';
				$attributes  = [ 'class' => '', 'id' => 'bulk-form' ];
				echo form_open( $form_action, $attributes ); ?>
                <input type="hidden" name="list" id="list-data"/>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-head"><?= $this->lang->line( 'application_tickets' ); ?></div>
            <div class="table-div">
                <table class="data-sorting table" id="tickets"
                       rel="<?= base_url() ?>" cellspacing="0" cellpadding="0">
                    <thead>
                    <th class="hidden-xs no_sort simplecheckbox"
                        style="width:16px"><input class="checkbox-nolabel"
                                                  type="checkbox" id="checkAll"
                                                  name="selectall" value="">
                    </th>
                    <th class="hidden-xs"
                        style="width:70px"><?= $this->lang->line( 'application_ticket_id' ); ?></th>
                    <th style="width:50px"><?= $this->lang->line( 'application_status' ); ?></th>
                    <th class="hidden-xs no_sort"
                        style="width:5px; padding-right: 5px;"><i
                                class="icon dripicons-star"></i></th>
                    <th><?= $this->lang->line( 'application_subject' ); ?></th>
                    <th class="hidden-xs"><?= $this->lang->line( 'application_last_reply' ) ?></th>
                    <th class="hidden-xs"><?= $this->lang->line( 'application_queue' ); ?></th>
                    <th class="hidden-xs"><?= $this->lang->line( 'application_client' ); ?></th>
                    <th class="hidden-xs"><?= $this->lang->line( 'application_owner' ); ?></th>
                    </thead>
					<?php foreach ( $ticket as $value ): ?>
						<?php $lable = false;
						if ( $value->status == 'new' ) {
							$lable = 'label-important';
						} elseif ( $value->status == 'open' ) {
							$lable = 'label-warning';
						} elseif ( $value->status == 'closed'
						           || $value->status == 'inprogress'
						) {
							$lable = 'label-success';
						} elseif ( $value->status == 'reopened' ) {
							$lable = 'label-warning';
						} ?>
                        <tr id="<?= $value->id; ?>">
                            <td class="hidden-xs noclick simplecheckbox"
                                style="width:16px"><input
                                        class="checkbox-nolabel bulk-box"
                                        type="checkbox" name="bulk[]"
                                        value="<?= $value->id ?>"></td>
                            <td class="hidden-xs"
                                style="width:70px"><?= $value->reference; ?></td>
                            <td style="width:50px"><span
                                        class="label <?php echo $lable; ?>"><?= $this->lang->line( 'application_ticket_status_'
							                                                                       . $value->status ); ?></span>
                            </td>
							<?php if ( is_object( $value->user ) ) {
								$user_id = $value->user->id;
							} else {
								$user_id = false;
							} ?>
                            <td class="hidden-xs"
                                style="width:15px"><?php if ( $value->updated == 1 && $user_id == $this->user->id) {
									?><i class="icon dripicons-star"
                                         style="color: #d48b2a;"></i><?php
								} else {
									?> <i class="icon dripicons-star"
                                          style="opacity: 0.2;"></i><?php
								} ?></td>
                            <td><?= $value->subject; ?></td>
                            <td class="hidden-xs"><?php if ( is_object( $value->getLastArticle() ) ) : ?>
                                    <span class="hidden"><?= $value->getLastArticle()->datetime ?></span> <?= date( $core_settings->date_format
									                                                                                . ' '
									                                                                                . $core_settings->date_time_format,
										$value->getLastArticle()->datetime ) ?><?php endif; ?>
                            </td>
                            <td class="hidden-xs"><span><?php if ( is_object( $value->queue ) ) {
										echo $value->queue->name;
									} ?></span></td>
                            <td class="hidden-xs"><?php if ( ! is_object( $value->company ) ) {
									echo '<span class="label">'
									     . $this->lang->line( 'application_no_client_assigned' )
									     . '</span>';
								} else {
									echo '<span class="label label-info">'
									     . $value->company->name . '</span>';
								} ?></td>
                            <td class="hidden-xs"><?php if ( ! is_object( $value->user ) ) {
									echo '<span class="label">'
									     . $this->lang->line( 'application_not_assigned' )
									     . '</span>';
								} else {
									echo '<span class="label label-info">'
									     . $value->user->firstname . ' '
									     . $value->user->lastname . '</span>';
								} ?></td>

                        </tr>

					<?php endforeach; ?>
                </table>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="<?= base_url() ?>tickets/create" class="btn btn-primary"
               data-toggle="mainmodal"><?= $this->lang->line( 'application_create_new_ticket' ); ?></a>
            <div class="btn-group pull-right-responsive margin-right-3">
                <button type="button" class="btn btn-primary dropdown-toggle"
                        data-toggle="dropdown">
					<?php if ( isset( $activeQueue ) ) {
						echo $activeQueue->name;
					} else {
						echo $this->lang->line( 'application_queue' );
					} ?>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><a id=""
                           href="<?= base_url() ?>tickets/"><?= $this->lang->line( 'application_all' ); ?></a>
                    </li>
					<?php foreach ( $queues as $value ): ?>
                        <li><a id=""
                               href="<?= base_url() ?>tickets/queues/<?= $value->id ?>" <?php if ( $this->user->queue == $value->id
							) {
								echo 'style="font-weight: bold;"';
							} ?>><?= $value->name ?></a></li>
					<?php endforeach; ?>

                </ul>
            </div>
            <div class="btn-group pull-right-responsive margin-right-3">
                <button type="button" class="btn btn-primary dropdown-toggle"
                        data-toggle="dropdown">
					<?php if ( isset( $ticketFilter ) ) {
						echo $ticketFilter;
					} ?> <span class="caret"></span>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
					<?php foreach ( $submenu as $name => $value ): ?>
                        <li><a id="<?php $val_id = explode( '/', $value );
							if ( ! is_numeric( end( $val_id ) ) ) {
								echo end( $val_id );
							} else {
								$num = count( $val_id ) - 2;
								echo $val_id[ $num ];
							} ?>" href="<?= site_url( $value ); ?>"><?= $name ?></a>
                        </li>
					<?php endforeach; ?>

                </ul>
            </div>
            <div class="btn-group pull-right-responsive margin-right-3 hidden-xs">
                <button id="bulk-button" type="button"
                        class="btn btn-default dropdown-toggle"
                        data-toggle="dropdown">
					<?= $this->lang->line( 'application_bulk_actions' ); ?> <span
                            class="caret"></span>
                </button>
                <ul class="dropdown-menu pull-right bulk-dropdown" role="menu">

                    <li data-action="close"><a id=""
                                               href="#"><?= $this->lang->line( 'application_close' ); ?></a>
                    </li>


                </ul>
				<?php
				$form_action = base_url() . 'tickets/bulk/';
				$attributes  = [ 'class' => '', 'id' => 'bulk-form' ];
				echo form_open( $form_action, $attributes ); ?>
                <input type="hidden" name="list" id="list-data"/>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-head"><?= $this->lang->line( 'application_tickets' ); ?></div>
            <div class="table-div">
                <table class="data-sorting table" id="tickets"
                       rel="<?= base_url() ?>" cellspacing="0" cellpadding="0">
                    <thead>
                    <th class="hidden-xs no_sort simplecheckbox"
                        style="width:16px"><input class="checkbox-nolabel"
                                                  type="checkbox" id="checkAll"
                                                  name="selectall" value="">
                    </th>
                    <th class="hidden-xs"
                        style="width:70px"><?= $this->lang->line( 'application_ticket_id' ); ?></th>
                    <th style="width:50px"><?= $this->lang->line( 'application_status' ); ?></th>
                    <th class="hidden-xs no_sort"
                        style="width:5px; padding-right: 5px;"><i
                                class="icon dripicons-star"></i></th>
                    <th><?= $this->lang->line( 'application_subject' ); ?></th>
                    <th class="hidden-xs"><?= $this->lang->line( 'application_last_reply' ) ?></th>
                    <th class="hidden-xs"><?= $this->lang->line( 'application_queue' ); ?></th>
                    <th class="hidden-xs"><?= $this->lang->line( 'application_client' ); ?></th>
                    <th class="hidden-xs"><?= $this->lang->line( 'application_owner' ); ?></th>
                    </thead>
					<?php foreach ( $ticket as $value ): ?>
						<?php $lable = false;
						if ( $value->status == 'new' ) {
							$lable = 'label-important';
						} elseif ( $value->status == 'open' ) {
							$lable = 'label-warning';
						} elseif ( $value->status == 'closed'
						           || $value->status == 'inprogress'
						) {
							$lable = 'label-success';
						} elseif ( $value->status == 'reopened' ) {
							$lable = 'label-warning';
						} ?>
                        <tr id="<?= $value->id; ?>">
                            <td class="hidden-xs noclick simplecheckbox"
                                style="width:16px"><input
                                        class="checkbox-nolabel bulk-box"
                                        type="checkbox" name="bulk[]"
                                        value="<?= $value->id ?>"></td>
                            <td class="hidden-xs"
                                style="width:70px"><?= $value->reference; ?></td>
                            <td style="width:50px"><span
                                        class="label <?php echo $lable; ?>"><?= $this->lang->line( 'application_ticket_status_'
							                                                                       . $value->status ); ?></span>
                            </td>
							<?php if ( is_object( $value->user ) ) {
								$user_id = $value->user->id;
							} else {
								$user_id = false;
							} ?>
                            <td class="hidden-xs"
                                style="width:15px"><?php if ( $value->updated == 1 && $user_id == $this->user->id) {
									?><i class="icon dripicons-star"
                                         style="color: #d48b2a;"></i><?php
								} else {
									?> <i class="icon dripicons-star"
                                          style="opacity: 0.2;"></i><?php
								} ?></td>
                            <td><?= $value->subject; ?></td>
                            <td class="hidden-xs"><?php if ( is_object( $value->getLastArticle() ) ) : ?>
                                    <span class="hidden"><?= $value->getLastArticle()->datetime ?></span> <?= date( $core_settings->date_format
									                                                                                . ' '
									                                                                                . $core_settings->date_time_format,
										$value->getLastArticle()->datetime ) ?><?php endif; ?>
                            </td>
                            <td class="hidden-xs"><span><?php if ( is_object( $value->queue ) ) {
										echo $value->queue->name;
									} ?></span></td>
                            <td class="hidden-xs"><?php if ( ! is_object( $value->company ) ) {
									echo '<span class="label">'
									     . $this->lang->line( 'application_no_client_assigned' )
									     . '</span>';
								} else {
									echo '<span class="label label-info">'
									     . $value->company->name . '</span>';
								} ?></td>
                            <td class="hidden-xs"><?php if ( ! is_object( $value->user ) ) {
									echo '<span class="label">'
									     . $this->lang->line( 'application_not_assigned' )
									     . '</span>';
								} else {
									echo '<span class="label label-info">'
									     . $value->user->firstname . ' '
									     . $value->user->lastname . '</span>';
								} ?></td>

                        </tr>

					<?php endforeach; ?>
                </table>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="<?= base_url() ?>tickets/create" class="btn btn-primary"
               data-toggle="mainmodal"><?= $this->lang->line( 'application_create_new_ticket' ); ?></a>
            <div class="btn-group pull-right-responsive margin-right-3">
                <button type="button" class="btn btn-primary dropdown-toggle"
                        data-toggle="dropdown">
					<?php if ( isset( $activeQueue ) ) {
						echo $activeQueue->name;
					} else {
						echo $this->lang->line( 'application_queue' );
					} ?>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><a id=""
                           href="<?= base_url() ?>tickets/"><?= $this->lang->line( 'application_all' ); ?></a>
                    </li>
					<?php foreach ( $queues as $value ): ?>
                        <li><a id=""
                               href="<?= base_url() ?>tickets/queues/<?= $value->id ?>" <?php if ( $this->user->queue == $value->id
							) {
								echo 'style="font-weight: bold;"';
							} ?>><?= $value->name ?></a></li>
					<?php endforeach; ?>

                </ul>
            </div>
            <div class="btn-group pull-right-responsive margin-right-3">
                <button type="button" class="btn btn-primary dropdown-toggle"
                        data-toggle="dropdown">
					<?php if ( isset( $ticketFilter ) ) {
						echo $ticketFilter;
					} ?> <span class="caret"></span>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
					<?php foreach ( $submenu as $name => $value ): ?>
                        <li><a id="<?php $val_id = explode( '/', $value );
							if ( ! is_numeric( end( $val_id ) ) ) {
								echo end( $val_id );
							} else {
								$num = count( $val_id ) - 2;
								echo $val_id[ $num ];
							} ?>" href="<?= site_url( $value ); ?>"><?= $name ?></a>
                        </li>
					<?php endforeach; ?>

                </ul>
            </div>
            <div class="btn-group pull-right-responsive margin-right-3 hidden-xs">
                <button id="bulk-button" type="button"
                        class="btn btn-default dropdown-toggle"
                        data-toggle="dropdown">
					<?= $this->lang->line( 'application_bulk_actions' ); ?> <span
                            class="caret"></span>
                </button>
                <ul class="dropdown-menu pull-right bulk-dropdown" role="menu">

                    <li data-action="close"><a id=""
                                               href="#"><?= $this->lang->line( 'application_close' ); ?></a>
                    </li>


                </ul>
				<?php
				$form_action = base_url() . 'tickets/bulk/';
				$attributes  = [ 'class' => '', 'id' => 'bulk-form' ];
				echo form_open( $form_action, $attributes ); ?>
                <input type="hidden" name="list" id="list-data"/>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-head"><?= $this->lang->line( 'application_tickets' ); ?></div>
            <div class="table-div">
                <table class="data-sorting table" id="tickets"
                       rel="<?= base_url() ?>" cellspacing="0" cellpadding="0">
                    <thead>
                    <th class="hidden-xs no_sort simplecheckbox"
                        style="width:16px"><input class="checkbox-nolabel"
                                                  type="checkbox" id="checkAll"
                                                  name="selectall" value="">
                    </th>
                    <th class="hidden-xs"
                        style="width:70px"><?= $this->lang->line( 'application_ticket_id' ); ?></th>
                    <th style="width:50px"><?= $this->lang->line( 'application_status' ); ?></th>
                    <th class="hidden-xs no_sort"
                        style="width:5px; padding-right: 5px;"><i
                                class="icon dripicons-star"></i></th>
                    <th><?= $this->lang->line( 'application_subject' ); ?></th>
                    <th class="hidden-xs"><?= $this->lang->line( 'application_last_reply' ) ?></th>
                    <th class="hidden-xs"><?= $this->lang->line( 'application_queue' ); ?></th>
                    <th class="hidden-xs"><?= $this->lang->line( 'application_client' ); ?></th>
                    <th class="hidden-xs"><?= $this->lang->line( 'application_owner' ); ?></th>
                    </thead>
					<?php foreach ( $ticket as $value ): ?>
						<?php $lable = false;
						if ( $value->status == 'new' ) {
							$lable = 'label-important';
						} elseif ( $value->status == 'open' ) {
							$lable = 'label-warning';
						} elseif ( $value->status == 'closed'
						           || $value->status == 'inprogress'
						) {
							$lable = 'label-success';
						} elseif ( $value->status == 'reopened' ) {
							$lable = 'label-warning';
						} ?>
                        <tr id="<?= $value->id; ?>">
                            <td class="hidden-xs noclick simplecheckbox"
                                style="width:16px"><input
                                        class="checkbox-nolabel bulk-box"
                                        type="checkbox" name="bulk[]"
                                        value="<?= $value->id ?>"></td>
                            <td class="hidden-xs"
                                style="width:70px"><?= $value->reference; ?></td>
                            <td style="width:50px"><span
                                        class="label <?php echo $lable; ?>"><?= $this->lang->line( 'application_ticket_status_'
							                                                                       . $value->status ); ?></span>
                            </td>
							<?php if ( is_object( $value->user ) ) {
								$user_id = $value->user->id;
							} else {
								$user_id = false;
							} ?>
                            <td class="hidden-xs"
                                style="width:15px"><?php if ( $value->updated == 1 && $user_id == $this->user->id) {
									?><i class="icon dripicons-star"
                                         style="color: #d48b2a;"></i><?php
								} else {
									?> <i class="icon dripicons-star"
                                          style="opacity: 0.2;"></i><?php
								} ?></td>
                            <td><?= $value->subject; ?></td>
                            <td class="hidden-xs"><?php if ( is_object( $value->getLastArticle() ) ) : ?>
                                    <span class="hidden"><?= $value->getLastArticle()->datetime ?></span> <?= date( $core_settings->date_format
									                                                                                . ' '
									                                                                                . $core_settings->date_time_format,
										$value->getLastArticle()->datetime ) ?><?php endif; ?>
                            </td>
                            <td class="hidden-xs"><span><?php if ( is_object( $value->queue ) ) {
										echo $value->queue->name;
									} ?></span></td>
                            <td class="hidden-xs"><?php if ( ! is_object( $value->company ) ) {
									echo '<span class="label">'
									     . $this->lang->line( 'application_no_client_assigned' )
									     . '</span>';
								} else {
									echo '<span class="label label-info">'
									     . $value->company->name . '</span>';
								} ?></td>
                            <td class="hidden-xs"><?php if ( ! is_object( $value->user ) ) {
									echo '<span class="label">'
									     . $this->lang->line( 'application_not_assigned' )
									     . '</span>';
								} else {
									echo '<span class="label label-info">'
									     . $value->user->firstname . ' '
									     . $value->user->lastname . '</span>';
								} ?></td>

                        </tr>

					<?php endforeach; ?>
                </table>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="<?= base_url() ?>tickets/create" class="btn btn-primary"
               data-toggle="mainmodal"><?= $this->lang->line( 'application_create_new_ticket' ); ?></a>
            <div class="btn-group pull-right-responsive margin-right-3">
                <button type="button" class="btn btn-primary dropdown-toggle"
                        data-toggle="dropdown">
					<?php if ( isset( $activeQueue ) ) {
						echo $activeQueue->name;
					} else {
						echo $this->lang->line( 'application_queue' );
					} ?>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><a id=""
                           href="<?= base_url() ?>tickets/"><?= $this->lang->line( 'application_all' ); ?></a>
                    </li>
					<?php foreach ( $queues as $value ): ?>
                        <li><a id=""
                               href="<?= base_url() ?>tickets/queues/<?= $value->id ?>" <?php if ( $this->user->queue == $value->id
							) {
								echo 'style="font-weight: bold;"';
							} ?>><?= $value->name ?></a></li>
					<?php endforeach; ?>

                </ul>
            </div>
            <div class="btn-group pull-right-responsive margin-right-3">
                <button type="button" class="btn btn-primary dropdown-toggle"
                        data-toggle="dropdown">
					<?php if ( isset( $ticketFilter ) ) {
						echo $ticketFilter;
					} ?> <span class="caret"></span>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
					<?php foreach ( $submenu as $name => $value ): ?>
                        <li><a id="<?php $val_id = explode( '/', $value );
							if ( ! is_numeric( end( $val_id ) ) ) {
								echo end( $val_id );
							} else {
								$num = count( $val_id ) - 2;
								echo $val_id[ $num ];
							} ?>" href="<?= site_url( $value ); ?>"><?= $name ?></a>
                        </li>
					<?php endforeach; ?>

                </ul>
            </div>
            <div class="btn-group pull-right-responsive margin-right-3 hidden-xs">
                <button id="bulk-button" type="button"
                        class="btn btn-default dropdown-toggle"
                        data-toggle="dropdown">
					<?= $this->lang->line( 'application_bulk_actions' ); ?> <span
                            class="caret"></span>
                </button>
                <ul class="dropdown-menu pull-right bulk-dropdown" role="menu">

                    <li data-action="close"><a id=""
                                               href="#"><?= $this->lang->line( 'application_close' ); ?></a>
                    </li>


                </ul>
				<?php
				$form_action = base_url() . 'tickets/bulk/';
				$attributes  = [ 'class' => '', 'id' => 'bulk-form' ];
				echo form_open( $form_action, $attributes ); ?>
                <input type="hidden" name="list" id="list-data"/>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-head"><?= $this->lang->line( 'application_tickets' ); ?></div>
            <div class="table-div">
                <table class="data-sorting table" id="tickets"
                       rel="<?= base_url() ?>" cellspacing="0" cellpadding="0">
                    <thead>
                    <th class="hidden-xs no_sort simplecheckbox"
                        style="width:16px"><input class="checkbox-nolabel"
                                                  type="checkbox" id="checkAll"
                                                  name="selectall" value="">
                    </th>
                    <th class="hidden-xs"
                        style="width:70px"><?= $this->lang->line( 'application_ticket_id' ); ?></th>
                    <th style="width:50px"><?= $this->lang->line( 'application_status' ); ?></th>
                    <th class="hidden-xs no_sort"
                        style="width:5px; padding-right: 5px;"><i
                                class="icon dripicons-star"></i></th>
                    <th><?= $this->lang->line( 'application_subject' ); ?></th>
                    <th class="hidden-xs"><?= $this->lang->line( 'application_last_reply' ) ?></th>
                    <th class="hidden-xs"><?= $this->lang->line( 'application_queue' ); ?></th>
                    <th class="hidden-xs"><?= $this->lang->line( 'application_client' ); ?></th>
                    <th class="hidden-xs"><?= $this->lang->line( 'application_owner' ); ?></th>
                    </thead>
					<?php foreach ( $ticket as $value ): ?>
						<?php $lable = false;
						if ( $value->status == 'new' ) {
							$lable = 'label-important';
						} elseif ( $value->status == 'open' ) {
							$lable = 'label-warning';
						} elseif ( $value->status == 'closed'
						           || $value->status == 'inprogress'
						) {
							$lable = 'label-success';
						} elseif ( $value->status == 'reopened' ) {
							$lable = 'label-warning';
						} ?>
                        <tr id="<?= $value->id; ?>">
                            <td class="hidden-xs noclick simplecheckbox"
                                style="width:16px"><input
                                        class="checkbox-nolabel bulk-box"
                                        type="checkbox" name="bulk[]"
                                        value="<?= $value->id ?>"></td>
                            <td class="hidden-xs"
                                style="width:70px"><?= $value->reference; ?></td>
                            <td style="width:50px"><span
                                        class="label <?php echo $lable; ?>"><?= $this->lang->line( 'application_ticket_status_'
							                                                                       . $value->status ); ?></span>
                            </td>
							<?php if ( is_object( $value->user ) ) {
								$user_id = $value->user->id;
							} else {
								$user_id = false;
							} ?>
                            <td class="hidden-xs"
                                style="width:15px"><?php if ( $value->updated == 1 && $user_id == $this->user->id) {
									?><i class="icon dripicons-star"
                                         style="color: #d48b2a;"></i><?php
								} else {
									?> <i class="icon dripicons-star"
                                          style="opacity: 0.2;"></i><?php
								} ?></td>
                            <td><?= $value->subject; ?></td>
                            <td class="hidden-xs"><?php if ( is_object( $value->getLastArticle() ) ) : ?>
                                    <span class="hidden"><?= $value->getLastArticle()->datetime ?></span> <?= date( $core_settings->date_format
									                                                                                . ' '
									                                                                                . $core_settings->date_time_format,
										$value->getLastArticle()->datetime ) ?><?php endif; ?>
                            </td>
                            <td class="hidden-xs"><span><?php if ( is_object( $value->queue ) ) {
										echo $value->queue->name;
									} ?></span></td>
                            <td class="hidden-xs"><?php if ( ! is_object( $value->company ) ) {
									echo '<span class="label">'
									     . $this->lang->line( 'application_no_client_assigned' )
									     . '</span>';
								} else {
									echo '<span class="label label-info">'
									     . $value->company->name . '</span>';
								} ?></td>
                            <td class="hidden-xs"><?php if ( ! is_object( $value->user ) ) {
									echo '<span class="label">'
									     . $this->lang->line( 'application_not_assigned' )
									     . '</span>';
								} else {
									echo '<span class="label label-info">'
									     . $value->user->firstname . ' '
									     . $value->user->lastname . '</span>';
								} ?></td>

                        </tr>

					<?php endforeach; ?>
                </table>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="">
						    <?php if ( ! isset( $agent )
						               && $this->user->admin == '1'
						    ) {
							    $access = [];
							    if ( isset( $user ) ) {
								    $access = explode( ',', $user->access );
							    } ?>


                                <div class="form-group" style="border: 0px;">
                                    <div class="table-head"><?= $this->lang->line( 'application_module_access' ); ?></div>
								    <?php foreach ( $modules as $key => $value ) {
									    if ( $value->type == 'widget'
									         && ! isset( $wi )
									    ) { ?>
                                            <div class="col-md-2" style="padding: 4px 31px;">Widgets</div>
										    <?php $wi = true;
									    } ?>
                                        <div class="col-md-2">
                                            <input type="checkbox" class="checkbox"
                                                   id="r_<?= $value->link; ?>"
                                                   name="access[]"
                                                   data-labelauty="<?= $this->lang->line( 'application_'
										                                                  . $value->link ); ?>"
                                                   value="<?= $value->id; ?>" <?php if ( in_array( $value->id,
											    $access )
										    ) {
											    echo 'checked="checked"';
										    } ?>>
                                        </div>
									    <?php
								    } ?>
                                </div>
							    <?php
						    } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


