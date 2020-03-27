<?php if ( ! defined( 'BASEPATH' ) ) {
	exit( 'No direct script access allowed' );
}

class Agents extends MY_Controller {
	public function __construct() {
		parent::__construct();
		$access = false;
		unset( $_POST['DataTables_Table_0_length'] );
		if ( $this->client ) {
			redirect( 'cprojects' );
		} elseif ( $this->user ) {
			foreach ( $this->view_data['menu'] as $key => $value ) {
				if ( $value->link == 'settings' ) {
					$access = true;
				}
			}
			if ( ! $access ) {
				redirect( 'login' );
			}
		} else {
			redirect( 'login' );
		}
		if ( ! $this->user->admin ) {
			$this->session->set_flashdata( 'message',
				'error:' . $this->lang->line( 'messages_no_access' ) );
			redirect( 'dashboard' );
		}
	}

	public function index()
	{
		$options                  =
			[ 'conditions' => [ 'status != ?', 'deleted' ] ];
		$users                    = User::all( $options );
		$this->view_data['users'] = $users;
		$this->content_view       = 'settings/user';
	}

	public function user_update($user = false)
	{
		$user = User::find($user);

		if ($_POST) {
			$config['upload_path'] = './files/media/';
			$config['encrypt_name'] = true;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_width'] = '180';
			$config['max_height'] = '180';

			if (!is_dir($config['upload_path'])) {
				mkdir($config['upload_path']);
			}

			$this->load->library('upload', $config);

			if ($this->upload->do_upload()) {
				$data = ['upload_data' => $this->upload->data()];

				$_POST['userpic'] = $data['upload_data']['file_name'];
			}

			unset($_POST['file-name'], $_POST['send'], $_POST['confirm_password']);

			if (!empty($_POST['access'])) {
				$_POST['access'] = implode(',', $_POST['access']);
			}
			$_POST = array_map('htmlspecialchars', $_POST);
			if (empty($_POST['password'])) {
				unset($_POST['password']);
			}
			if ($_POST['admin'] == '0' && $_POST['username'] == 'Admin') {
				$_POST['admin'] = '1';
			}
			$user->update_attributes($_POST);
			$this->session->set_flashdata('message', 'success:' . $this->lang->line('messages_save_user_success'));
			redirect('settings/users');
		} else {
			$this->view_data['user'] = $user;
			$this->theme_view = 'modal';
			$this->view_data['modules'] = Module::find('all', ['order' => 'sort asc', 'conditions' => ['type != ?', 'client']]);
			$this->view_data['queues'] = Queue::all();

			$this->view_data['title'] = $this->lang->line('application_edit_user');
			$this->view_data['form_action'] = 'agents/user_update/' . $user->id;
			$this->content_view = 'settings/_userform';
		}
	}

	public function user_view( $user = false ) {
		$user = User::find( $user );
		$this->view_data['user']    = $user;
		$this->view_data['queues'] = Queue::find('all', ['conditions' => ['inactive=?', '0']]);
		$this->view_data['modules'] = Module::find( 'all',
			[
				'order'      => 'sort asc',
				'conditions' => [ 'type != ?', 'client' ],
			] );
		$this->view_data['queues']  = Queue::all();

		$this->view_data['title']       =
			$this->lang->line( 'application_edit_user' );

		$this->view_data['form_action'] =
			'agents/user_update/' . $user->id;
		$this->content_view             = 'settings/_userforms';

	}

	public function document_create()
	{
		if ( $_POST ) {

		} else {
			$this->theme_view               = 'modal';
			$this->view_data['title']       =
				$this->lang->line( 'application_create_document' );

			$this->view_data['form_action'] = 'agents/document_create/';
			$this->content_view             = 'agents/_documentform';
		}
	}
}
