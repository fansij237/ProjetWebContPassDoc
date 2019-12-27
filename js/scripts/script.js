$(document).ready(function() {
    $(".my-progress-bar").circularProgress({
        line_width: 3,
        color: "white",
        starting_position: 0, 
        percent: 0,
        percentage: true,
        text: "Initialisation..."
    }).circularProgress('animate', 100, 6500);
});
