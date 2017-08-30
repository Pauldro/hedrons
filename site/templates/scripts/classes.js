function ajaxloadedmodal(button) {
    this.modal = button.data('modal');
    this.url = button.attr('href');
    this.loadinto = button.data('modal')+" .modal-content";
    if (button.data('modalsize')) {
        this.modalsize = button.data('modalsize');
    } else {
        this.modalsize = 'lg';
    }
}
