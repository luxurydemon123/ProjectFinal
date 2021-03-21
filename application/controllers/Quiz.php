<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quiz extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		// $this->load->model('Course_model');
		// $this->load->model('Lesson_model');
		// $this->load->model('Document_model');

		$this->load->database();
	}

	public function index()
	{
		$this->load->view('quiz/index_quiz');
	}

	public function QuestionStart()
	{
		$this->load->model('Quiz_model');
		$this->data['question'] = $this->Quiz_model->getQuestions();

		$this->load->view('quiz/playquiz_view', $this->data);
	}

	public function resultdisplay()
	{
		$this->data['checks'] = array(
			'ques1' => $this->input->post('quizid1'),
			'ques2' => $this->input->post('quizid2'),
			'ques3' => $this->input->post('quizid3'),
			'ques4' => $this->input->post('quizid4'),
			'ques5' => $this->input->post('quizid5'),
			'ques6' => $this->input->post('quizid6'),
			'ques7' => $this->input->post('quizid7'),
			'ques8' => $this->input->post('quizid8'),
			'ques9' => $this->input->post('quizid9'),
			'ques10' => $this->input->post('quizid10')
		);
		$this->load->model('Quiz_model');
		$this->data['results'] = $this->Quiz_model->getQuestions();
		$this->load->view('quiz/result_view', $this->data);


	}

}

/* End of file Quiz.php */
/* Location: ./application/controllers/Quiz.php */