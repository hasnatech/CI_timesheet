<style>
   .report-view-wrapper,
   .report-view-button {
      width: 17.8cm;
   }

   .report-view-wrapper {
      min-height: 21cm;
      padding: 1cm;
      border: 1px hsl(0, 0%, 82.7%) solid;
      border-radius: var(--ck-border-radius);
      background: white;
      box-shadow: 0 0 5px hsla(0, 0%, 0%, .1);
      margin: 0 auto;
      margin-top: 15px;
   }

   .report-view-button {
      margin: 0 auto;
      margin-top: 50px;

   }
</style>
<?php
$id_initiative = $this->uri->segment(5); 
$this->db->where("id",$id_initiative );
$title = $this->db->get("olympic_initiative")->row()->title;
?>
<div class="report-view-button">
   <?php if ($this->uri->segment(5)) : ?>
      <!-- <a href="<?= base_url('administrator/report/pdf_export/' . $this->uri->segment(4) . '/' . $this->uri->segment(5)) ?>" class="btn btn-default"><i class="fa fa-download"></i> Download Report</a> -->
      <button id="print_to_pdf" class="btn btn-default"><i class="fa fa-download"></i> Download Report</button>
   <?php endif ?>
</div>
<div class="report-view-wrapper">

   <?= @$report->content ?>
   <?= @$content ?>
</div>
<br>
<br>
<br>
<br>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.js" integrity="sha512-sk0cNQsixYVuaLJRG0a/KRJo9KBkwTDqr+/V94YrifZ6qi8+OO3iJEoHi0LvcTVv1HaBbbIvpx+MCjOuLVnwKg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.0/html2pdf.bundle.min.js" integrity="sha512-w3u9q/DeneCSwUDjhiMNibTRh/1i/gScBVp2imNVAMCt6cUHIw6xzhzcPFIaL3Q1EbI2l+nu17q2aLJJLo4ZYg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
document.getElementById('print_to_pdf').onclick = function () {
   var initiative = "<?=$title ?>";
   var element = document.getElementById('print_here');
   var opt = {
  margin:       1,
  filename:     'Report_' + initiative + '.pdf',
  image:        { type: 'jpeg', quality: 0.98 },
  html2canvas:  { scale: 2 },
  jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
};
html2pdf(element, opt);
}
</script>