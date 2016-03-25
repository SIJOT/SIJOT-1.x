<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Issue reporter (Webplatfrom => GitHub)
 *
 * @author Tim Joosten
 * @copyright Closed License, Tim Joosten
 * @package Website
 */
class Issue extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Scoutskamp 2016';

        $this->load->view('', $data);
        $this->load->view('', $data);
        $this->load->view('', $data);
        $this->load->view('', $data);
    }
}