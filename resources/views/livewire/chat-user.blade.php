<div class="container">
    <div class="wrapper wrapper-content animated fadeInRight">
        
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox chat-view">
                    
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-md-9 ">
                                <div class="chat-discussion">
                                    <div class="chat-message left">
                                        <img class="message-avatar"
                                            src="https://bootdey.com/img/Content/avatar/avatar1.png" alt>
                                        <div class="message">
                                            <a class="message-author" href="#"> Michael Smith </a>
                                            <span class="message-date"> Mon Jan 26 2015 - 18:39:23 </span>
                                            <span class="message-content">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                                volutpa.
                                            </span>
                                        </div>
                                    </div>
                                    <div class="chat-message right">
                                        <img class="message-avatar"
                                            src="https://bootdey.com/img/Content/avatar/avatar6.png" alt>
                                        <div class="message">
                                            <a class="message-author" href="#"> Karl Jordan </a>
                                            <span class="message-date"> Fri Jan 25 2015 - 11:12:36 </span>
                                            <span class="message-content">
                                                Many desktop publishing packages and web page editors now use Lorem
                                                Ipsum as their default model text, and a search for 'lorem ipsum' will
                                                uncover.
                                            </span>
                                        </div>
                                    </div>
                                    <div class="chat-message right">
                                        <img class="message-avatar"
                                            src="https://bootdey.com/img/Content/avatar/avatar6.png" alt>
                                        <div class="message">
                                            <a class="message-author" href="#"> Michael Smith </a>
                                            <span class="message-date"> Fri Jan 25 2015 - 11:12:36 </span>
                                            <span class="message-content">
                                                There are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration.
                                            </span>
                                        </div>
                                    </div>
                                    <div class="chat-message left">
                                        <img class="message-avatar"
                                            src="https://bootdey.com/img/Content/avatar/avatar1.png" alt>
                                        <div class="message">
                                            <a class="message-author" href="#"> Alice Jordan </a>
                                            <span class="message-date"> Fri Jan 25 2015 - 11:12:36 </span>
                                            <span class="message-content">
                                                All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                                chunks as necessary, making this the first true generator on the
                                                Internet.
                                                It uses a dictionary of over 200 Latin words.
                                            </span>
                                        </div>
                                    </div>
                                    <div class="chat-message right">
                                        <img class="message-avatar"
                                            src="https://bootdey.com/img/Content/avatar/avatar6.png" alt>
                                        <div class="message">
                                            <a class="message-author" href="#"> Mark Smith </a>
                                            <span class="message-date"> Fri Jan 25 2015 - 11:12:36 </span>
                                            <span class="message-content">
                                                All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                                chunks as necessary, making this the first true generator on the
                                                Internet.
                                                It uses a dictionary of over 200 Latin words.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="chat-users">
                                    <div class="users-list">
                                        @foreach ($users as $user)
                                            <div class="chat-user">
                                                <span class="pull-right label label-primary">{{$user->last_seen ? 'Online' : 'Offline'}}</span>
                                                <img class="chat-avatar"
                                                    src="{{$user->avatar}}" alt>
                                                <div class="chat-user-name">
                                                    <a href="#">{{$user->name}}</a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <form wire:change.prevent='sendMessage'>
                                <div class="col-lg-12">
                                    <div class="chat-message-form">
                                        <div class="form-group">
                                            <textarea wire:model='message' class="form-control message-input" name="message"
                                                placeholder="Enter message text and press enter"></textarea>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Enviar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
