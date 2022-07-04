jQuery("#animated-thumbnails-gallery").justifiedGallery({
    captions: false,
    // lastRow: "hide",
    rowHeight: 180,
    margins: 5
})
.on("jg.complete", function() {
    window.lightGallery(
        document.getElementById("animated-thumbnails-gallery"), {
            autoplayFirstVideo: false,
            pager: false,
            galleryId: "nature",
            animateThumb: false,
            zoomFromOrigin: false,
            allowMediaOverlap: true,
            toggleThumb: true,
            plugins: [lgZoom, lgThumbnail],
            mobileSettings: {
                controls: false,
                showCloseIcon: true,
                download: false,
                rotate: false
            }
        }
    );
});
