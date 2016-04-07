var Template = function() {
  
    // ------------------------------------------------------------------------
  
    this.__construct = function() {
        //console.log('Template Created');
        list_company();
    };
    
      // ------------------------------------------------------------------------
    
    this.get_lead_info = function(obj, group) {
        var output = '<form action="#" method="post">';

            output += '<div class="col-lg-3"><div class="well well-lg no-padding">';
            output += '<table class="table table-condensed lead_info_tbl">';
            output += '<tr><th><u>Lead_Details</u></th>';
                if(group == 1)
            output += '<th><input type="checkbox" class="minimal" id="lead_edit"></th>';
            output += '</tr>';
            output += '<tr><td>Created on</td><td>'+ obj.date + '</td></tr>';
            output += '<tr><td>Source</td><td><b>'+ obj.source + '</b></td></tr>';
            output += '<tr><td>Lead ID</td><td><b> LD'+ obj.lead_id + '</b></td></tr>';
            
            output += '<tr><td>Name (P)</td><td>';
            output += '<input type="text" class="ld_txt form-control input-sm"  id="name1" name="name1" value="'+ obj.name_1 + '" disabled="true">';
            output += '</td></tr>'

            output += '<tr><td>Name (S)</td><td>';
            output += '<input type="text" class="ld_txt form-control input-sm"  id="name2" name="name2" value="'+ obj.name_2 + '" disabled="true">';
            output += '</td></tr>'

            output += '<tr><td>Contact (P)</td><td>';
            output += '<input type="text" class="ld_txt form-control input-sm"  id="contact1" name="contact1" value="'+ obj.contact_1 + '" disabled="true">';
            output += '</td></tr>'

            output += '<tr><td>Contact (S)</td><td>';
            output += '<input type="text" class="ld_txt form-control input-sm"  id="contact2" name="contact2" value="'+ obj.contact_2 + '" disabled="true">';
            output += '</td></tr>'

            output += '<tr><td>Email (P)</td><td>';
            output += '<input type="text" class="ld_txt form-control input-sm"  id="email1" name="email1" value="'+ obj.email_1 + '" disabled="true">';
            output += '</td></tr>'

            output += '<tr><td>Email (S)</td><td>';
            output += '<input type="text" class="ld_txt form-control input-sm"  id="email2" name="email2" value="'+ obj.email_2 + '" disabled="true">';
            output += '</td></tr>'

            //output += '<tr><td>Name (P)</td><td><input type="text" class="lead form-control input-sm" value="'+ obj.name_1 + '" disabled="true"></td></tr>';
            //output += '<tr><td>Name (S)</td><td><input type="text" class="lead form-control input-sm" value="'+ obj.name_2 + '" disabled="true"></td></tr>';
            //output += '<tr><td>Contact (P)</td><td><input type="text" class="lead form-control input-sm" value="'+ obj.contact_1 + '" disabled="true"></td></tr>';
            //output += '<tr><td>Contact (S)</td><td><input type="text" class="lead form-control input-sm" value="'+ obj.contact_2 + '" disabled="true"></td></tr>';
            //output += '<tr><td>Email (P)</td><td><input type="text" class="lead form-control input-sm" value="'+ obj.email_1 + '" disabled="true"></td></tr>';
            //output += '<tr><td>Email (S)</td><td><input type="text" class="lead form-control input-sm" value="'+ obj.email_2 + '" disabled="true"></td></tr>';
            output += '<tr><td>Created by</td><td><b>'+ obj.user + '</b></td></tr>';
            output += '</table>';
            output += '</div></div>';

            output += '</form>';

            return output;

    }
    
    // ------------------------------------------------------------------------

   var list_company = function(name, id, obj) {
        var output = '';
        output += '<tr><td>' + name + '</td><td>';
        //output += '<td><select class="company" name="'+ id +'" id="'+ id +'" disabled="true">';
            if(obj)
        output += '<input type="checkbox" class="company" name="'+ id +'" id="'+ id +'" value="'+ id +'" disabled="true" checked>';
            else
        output += '<input type="checkbox" class="company" name="'+ id +'" id="'+ id +'" value="'+ id +'" disabled="true">';            
        output += '</td></tr>';
        return output;

    }

     this.get_company_reg_info = function(obj) {

            var value = '';
            var output = '';
               /* if(typeof obj.new_pvt_company == "undefined") 
                    { 
                        value = ''; 
                    } 
                else 
                    { 
                        value = obj.new_pvt_company; 
                    } */
                output = list_company('New PVT Company', 'new_pvt_company', obj.new_pvt_company);
                output += list_company('New OPC Company', 'new_opc_company', obj.new_opc_company);
                output += list_company('New LLP Company', 'new_llp_company', obj.new_llp_company);
                output += list_company('New Trust', 'new_trust', obj.new_trust);
                output += list_company('Alteration of Capital', 'alteration_of_capital', obj.alteration_of_capital);
                output += list_company('Consultation', 'lib_consultation', obj.lib_consultation);
                output += list_company('Address Change', 'address_change', obj.address_change);
                output += list_company('ROC Compliance', 'roc_compliance', obj.roc_compliances);
                output += list_company('Alteration of Directors', 'alteration_of_directors', obj.alteration_of_directors);

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
