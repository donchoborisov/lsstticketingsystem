<?php

 
namespace App\Mailers;
 
use App\Ticket;
use Illuminate\Contracts\Mail\Mailer;
 
class AppMailer
{
    protected $mailer;
 
    protected $fromAddress ='lsst.ticket@lsst.ac';
    protected $fromName = 'Support Ticket';
    protected $to;
    protected $subject;
    protected $view;
    protected $data = [];
 
  
 
     /**
     * AppMailer constructor.
     * @param $mailer
     */
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

 
    public function sendTicketInformation($user, Ticket $ticket )
    {
       

         $this->to = $user->email;
 
         $this->subject = "[Ticket ID: $ticket->ticket_id] $ticket->title";
 
         $this->view = 'emails.ticket_info';
 
         $this->data = compact('user', 'ticket');
 
         return $this->deliver();


    }

    
    public function sendAdminInformation($user, Ticket $ticket )
    {
       $wembley = ['doncho.borisov@lsst.ac'];
       $elephant = 'maksud.rahman@lsst.ac';
       $luton = ['muhammad.faisal@lsst.ac','timayo.ogunro@lsst.ac'];
       $aston = ['ahmed.kashif@lsst.ac','roland.iuga@lsst.ac'];
       $memo = ['hichem.atoui@lsst.ac','imran.termezy@lsst.ac'];
       $digbeth = 'mihai.popa@lsst.ac';

       if($ticket->campus->name == 'Wembley'){
        $this->to = $wembley;
 
        $this->subject = "[Ticket ID: $ticket->ticket_id] $ticket->title";

        $this->view = 'emails.admin_notification';

        $this->data = compact('user', 'ticket');

        return $this->deliver();  



       } elseif ($ticket->campus->name == 'Elephant & Castle')    {

        $this->to = $elephant;
 
        $this->subject = "[Ticket ID: $ticket->ticket_id] $ticket->title";

        $this->view = 'emails.admin_notification';

        $this->data = compact('user', 'ticket');

        return $this->deliver();  
}

elseif ($ticket->campus->name == 'Luton') {

    $this->to = $luton;
 
    $this->subject = "[Ticket ID: $ticket->ticket_id] $ticket->title";

    $this->view = 'emails.admin_notification';

    $this->data = compact('user', 'ticket');

    return $this->deliver();  

}

elseif ($ticket->campus->name == 'Aston'){
    $this->to = $aston;
 
    $this->subject = "[Ticket ID: $ticket->ticket_id] $ticket->title";

    $this->view = 'emails.admin_notification';

    $this->data = compact('user', 'ticket');

    return $this->deliver(); 

}
elseif ($ticket->campus->name == 'Memo House')
{

$this->to = $memo;
 
$this->subject = "[Ticket ID: $ticket->ticket_id] $ticket->title";

$this->view = 'emails.ticket_info';

$this->data = compact('user', 'ticket');

return $this->deliver();

}
elseif ($ticket->campus->name == 'Digbeth')
{

$this->to = $digbeth;
 
$this->subject = "[Ticket ID: $ticket->ticket_id] $ticket->title";

$this->view = 'emails.ticket_info';

$this->data = compact('user', 'ticket');

return $this->deliver();

}       
}

public function sendAdminAssignInformation($user,Ticket $ticket )
{
    $wembley = ['doncho.borisov@lsst.ac','waliul.islam@lsst.ac','syed.shah@lsst.ac'];
   $elephant = 'maksud.rahman@lsst.ac';
   $luton = 'timayo.ogunro@lsst.ac';
   $aston = ['ahmed.kashif@lsst.ac','roland.iuga@lsst.ac'];
   $memo = ['fahim.hasan@lsst.ac','imran.termezy@lsst.ac'];
   $digbeth = 'mihai.popa@lsst.ac';

   if($ticket->campus->name == 'Wembley'){
    $this->to = $wembley;

    $this->subject = "[Ticket ID: $ticket->ticket_id] $ticket->title";

    $this->view = 'emails.admin_assign_notification';

    $this->data = compact('user', 'ticket');

    return $this->deliver();  



   } elseif ($ticket->campus->name == 'Elephant & Castle')    {

    $this->to = $elephant;

    $this->subject = "[Ticket ID: $ticket->ticket_id] $ticket->title";

    $this->view = 'emails.admin_assign_notification';

    $this->data = compact('user', 'ticket');

    return $this->deliver();  
}

elseif ($ticket->campus->name == 'Luton') {

$this->to = $luton;

$this->subject = "[Ticket ID: $ticket->ticket_id] $ticket->title";

$this->view = 'emails.admin_assign_notification';

$this->data = compact('user', 'ticket');

return $this->deliver();  

}

elseif ($ticket->campus->name == 'Aston'){
$this->to = $aston;

$this->subject = "[Ticket ID: $ticket->ticket_id] $ticket->title";

$this->view = 'emails.admin_assign_notification';

$this->data = compact('user', 'ticket');

return $this->deliver(); 

}
elseif ($ticket->campus->name == 'Memo House')
{

$this->to = $memo;

$this->subject = "[Ticket ID: $ticket->ticket_id] $ticket->title";

$this->view =  'emails.admin_assign_notification';

$this->data = compact('user', 'ticket');

return $this->deliver();

}
elseif ($ticket->campus->name == 'Digbeth')
{

$this->to = $digbeth;
 
$this->subject = "[Ticket ID: $ticket->ticket_id] $ticket->title";

$this->view = 'emails.ticket_info';

$this->data = compact('user', 'ticket');

return $this->deliver();

}
   
}



public function sendTicketCommentsAdmin($ticketOwner, $user, Ticket $ticket, $comment)
    {

        $wembley = ['doncho.borisov@lsst.ac','waliul.islam@lsst.ac','amine.lallai@lsst.ac'];
        $elephant = 'maksud.rahman@lsst.ac';
        $luton = 'muhammad.faisal@lsst.ac';
        $aston = ['ahmed.kashif@lsst.ac','roland.iuga@lsst.ac'];
        $memo = 'hichem.atoui@lsst.ac';
        $digbeth = 'mihai.popa@lsst.ac';
 
        if($comment->campus == 'Wembley'){
            $this->to = $wembley;
 
            $this->subject = "RE: $ticket->title (Ticket ID: $ticket->ticket_id)";
     
            $this->view = 'emails.ticket_comments';
     
            $this->data = compact('ticketOwner', 'user', 'ticket', 'comment');
     
            return $this->deliver(); 
 
 
 
        } elseif ($comment->campus == 'Elephant & Castle')    {
 
            $this->to = $elephant;
 
            $this->subject = "RE: $ticket->title (Ticket ID: $ticket->ticket_id)";
     
            $this->view = 'emails.ticket_comments';
     
            $this->data = compact('ticketOwner', 'user', 'ticket', 'comment');
     
            return $this->deliver();  
 }
 
 elseif ($comment->campus == 'Luton') {
 
    $this->to = $luton;
 
        $this->subject = "RE: $ticket->title (Ticket ID: $ticket->ticket_id)";
 
        $this->view = 'emails.ticket_comments';
 
        $this->data = compact('ticketOwner', 'user', 'ticket', 'comment');
 
        return $this->deliver();
 
 }
 
 elseif ($comment->campus == 'Aston'){
    $this->to = $aston;
 
    $this->subject = "RE: $ticket->title (Ticket ID: $ticket->ticket_id)";

    $this->view = 'emails.ticket_comments';

    $this->data = compact('ticketOwner', 'user', 'ticket', 'comment');

    return $this->deliver(); 
 
 }
 elseif ($memo == 'Memo House')
 {
 
    $this->to = $ticketOwner->email;
 
    $this->subject = "RE: $ticket->title (Ticket ID: $ticket->ticket_id)";

    $this->view = 'emails.ticket_comments';

    $this->data = compact('ticketOwner', 'user', 'ticket', 'comment');

    return $this->deliver();
 
 }

 elseif ($ticket->campus->name == 'Digbeth')
{

$this->to = $digbeth;
 
$this->subject = "[Ticket ID: $ticket->ticket_id] $ticket->title";

$this->view = 'emails.ticket_info';

$this->data = compact('user', 'ticket');

return $this->deliver();

}


    }

 
    public function sendTicketComments($ticketOwner, $user, Ticket $ticket, $comment)
    {
        $this->to = $ticketOwner->email;
 
        $this->subject = "RE: $ticket->title (Ticket ID: $ticket->ticket_id)";
 
        $this->view = 'emails.ticket_comments';
 
        $this->data = compact('ticketOwner', 'user', 'ticket', 'comment');
 
        return $this->deliver();
    }
 
    public function sendTicketStatusNotification($ticketOwner, Ticket $ticket)
    {
        $this->to = $ticketOwner->email;
        $this->subject = "RE: $ticket->title (Ticket ID: $ticket->ticket_id)";
        $this->view = 'emails.ticket_status';
        $this->data = compact('ticketOwner', 'ticket');
 
        return $this->deliver();
    }
 
    public function deliver()
    {
        $this->mailer->send($this->view, $this->data, function($message){
 
            $message->from($this->fromAddress, $this->fromName)
                    ->to($this->to)->subject($this->subject);
 
        });
    }

}

?>
