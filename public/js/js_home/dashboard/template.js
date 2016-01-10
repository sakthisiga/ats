var Template = function() {
  
    // ------------------------------------------------------------------------
  
    this.__construct = function() {
        //console.log('Template Created');
    };
    
    
    // ------------------------------------------------------------------------
    
    this.article= function(obj) {
    	var date = new Date(obj.date);
        var output = '';
        output += '<tr><td>'+ obj.key_name +'</td>';
        output += '<td>'+ obj.key_username +'</td>';
        output += '<td>'+ atob(obj.key_password) +'</td>';
        output+= '<td>'+ obj.key_description +'</td></tr>';
        return output;
    };
    
    // ------------------------------------------------------------------------
    
    this.note = function(obj) {
        var output = '';
        output += '<div id="note_'+ obj.note_id +'">';
        output += '<span>' + obj.title + '</span>';
        output += '<span>' + obj.content + '</span>';
        output += '</div>';
        return output;
    };
    
    // ------------------------------------------------------------------------
    
    function formatDate(d)
    {
        var month = d.getMonth();
        var day = d.getDate();
        month = month + 1;

        month = month + "";

        if (month.length == 1)
        {
            month = "0" + month;
        }

        day = day + "";

        if (day.length == 1)
        {
            day = "0" + day;
        }

        return month + '-' + day + '-' + d.getFullYear();
    }
    this.__construct();
    
};
