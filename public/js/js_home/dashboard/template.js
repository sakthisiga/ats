var Template = function() {
  
    // ------------------------------------------------------------------------
  
    this.__construct = function() {
        //console.log('Template Created');
    };
    
      // ------------------------------------------------------------------------
    
    this.get_lead_info = function(obj) {
        var output = '<form action="#" method="post">';

            output += '<div class="col-lg-3"><div class="well well-lg no-padding">';
            output += '<table class="table table-condensed lead_info_tbl"><tr><th colspan="2"><u>Lead Basic Details</u></th></tr>';
            output += '<tr><td>Created on</td><td><b>'+ obj.date + '</b></td></tr>';
            output += '<tr><td>Source</td><td><b>'+ obj.source + '</b></td></tr>';
            output += '<tr><td>Lead ID</td><td><b> LD'+ obj.lead_id + '</b></td></tr>';
            output += '<tr><td>Name (P)</td><td><b>'+ obj.name_1 + '</b></td></tr>';
            output += '<tr><td>Name (S)</td><td><b>'+ obj.name_2 + '</b></td></tr>';
            output += '<tr><td>Contact (P)</td><td><b>'+ obj.contact_1 + '</b></td></tr>';
            output += '<tr><td>Contact (S)</td><td><b>'+ obj.contact_2 + '</b></td></tr>';
            output += '<tr><td>Email (P)</td><td><b>'+ obj.email_1 + '</b></td></tr>';
            output += '<tr><td>Email (S)</td><td><b>'+ obj.email_2 + '</b></td></tr>';
            output += '<tr><td>Created by</td><td><b>'+ obj.user + '</b></td></tr>';
            output += '</table>';
            output += '</div></div>';

            output += '</form>';

            return output;

    }
    
    // ------------------------------------------------------------------------

     this.get_company_reg_info = function(obj) {
        
            var output = '<tr><td><b>'+ obj.Field + '</b></td></tr>';
            return output;
     }

    // ------------------------------------------------------------------------
    
    this.article = function(obj) {
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
