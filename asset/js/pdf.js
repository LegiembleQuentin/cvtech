 src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"

    const downloadPDF = () => {
    const modalContent = document.querySelector("#modal1").innerHTML;
    const pdf = new jsPDF();
    pdf.fromHTML(modalContent, 15, 15, {
    width: 170
});
    pdf.save("modal-content.pdf");
};

    document.querySelector(".download-pdf").addEventListener("click", downloadPDF);
