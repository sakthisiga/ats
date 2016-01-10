var Dashboard = function() {
  
    // ------------------------------------------------------------------------
  
    this.__construct = function() {
        //console.log('Dashboard Created');
        Event       = new Event();
        Template    = new Template();

       // Display     = new Display();
        $("#error").hide();
        $("#success").hide();
        $("#warning").hide();
        
    };
    

    // ------------------------------------------------------------------------
    
    this.__construct();
    
};
