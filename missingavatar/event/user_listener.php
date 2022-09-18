<?php

namespace kaerol\missingavatar\event;

use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class user_listener implements EventSubscriberInterface
{
	
	/* @var Container */
	protected $phpbb_container;
	
	/** @var \phpbb\auth\auth */
	protected $auth;
	
	/** @var \phpbb\config\config */
	protected $config;
	
	/** @var \phpbb\event\dispatcher_interface */
	protected $dispatcher;

	/** @var \phpbb\notification\manager */
	protected $notification_manager;
	
	/** @var \phpbb\request\request */
	protected $request;

	/** @var \phpbb\template\template */
	protected $template;
	
	/** @var \phpbb\user */
	protected $user;

	public function __construct(
		Container $phpbb_container, 
		\phpbb\auth\auth $auth,
		\phpbb\config\config $config,
		\phpbb\event\dispatcher_interface $dispatcher,
		\phpbb\notification\manager $notification_manager,
		\phpbb\request\request $request,
		\phpbb\template\template $template,
		\phpbb\user $user)
	{		
		$this->auth = $auth;
		$this->config = $config;
		$this->notification_manager = $notification_manager;
		$this->request = $request;
		$this->template = $template;
		$this->user = $user;
		$this->user->add_lang_ext('kaerol/missingavatar', 'missingavatar');
	}
	
	static public function getSubscribedEvents()
	{
		return array(
            'core.user_setup' 							=> 'user_setup', // dane usera
		);
	}
	
	public function user_setup($event)
	{			
		$user_data = $event['user_data'];
		$this->template->assign_var('S_SHOW_MISSINGAVATAR_PANEL', false);			

		if (
				empty($user_data['user_avatar']) && 
				empty($user_data['user_avatar_type']) && 
				intval($user_data['user_avatar_width']) == 0 && 
				intval($user_data['user_avatar_height']) == 0
			) 
		{
			$this->template->assign_var('S_SHOW_MISSINGAVATAR_PANEL', true);			
		}		
	}	
}
