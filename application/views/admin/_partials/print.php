<style>
@media print
{
.noprint {display:none;}
body{
        width: 21cm;
        height: 29.7cm;
        margin: 20mm 45mm 40mm 100mm; 
        font-size: 20px;
        /* change the margins as you want them to be. */
   } 
}
@page {
    size: 21cm 29.7cm;
    margin: 0mm 0mm 0mm 0mm;
    counter-increment: page;
    counter-reset: page 1;
    font-size: 25px;
    @top-right {
        content: "Page " counter(page) " of " counter(pages);
    }
     /* change the margins as you want them to be. */
}
@media screen
{
}
</style>