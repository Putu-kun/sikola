<?php
Class Laporanpdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
    
    }

    
    function index(){
       $this->load->library('dompdf_gen');

       $this->load->view('siswa/printbukti');


       $paper_size = 'A4';
       $orientation = 'landscape';
       $html = $this->output->get_output();
       $pdf->Image('img/6.png', 10, 10);

       $this->dompdf->set_paper($paper_size, $orientation);

       $this->dompdf->load_html($html);
       $this->dompdf->render();
       $this->dompdf->stream("print_buktiujian.pdf", array('Attachment'=>0));

} }