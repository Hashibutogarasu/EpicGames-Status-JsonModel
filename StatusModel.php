<?php


class StatusModel{
    public $page;
    public $components;
    public $incidents;
    public $scheduled_maintenances;
    public $status;

    public function __construct($data)
    {
        $this->page = new page($data);
        $this->components = new components($data);
        $this->incidents = [];
        $this->scheduled_maintenances = new scheduled_maintenances($data);
        $this->status = new status($data);
    }
}

class page{
    public $id;
    public $url;
    public $time_zone;
    public $updated_at;

    public function __construct($data)
    {
        $this->id = $data["page"]["id"];
        $this->url = $data["page"]["url"];
        $this->time_zone = $data["page"]["time_zone"];
        $this->updated_at = $data["page"]["updated_at"];
    }
}

class components{
    public $index;
    public $id;
    public $name;
    public $status;
    public $created_at;
    public $updated_at;
    public $position;
    public $description;
    public $showcase;
    public $start_date;
    public $group_id;
    public $page_id;
    public $group;
    public $only_show_if_degraded;

    public function __construct($data)
    {
        $this->id = $data["components"][(int)$this->index]["id"];
        $this->name = $data["components"][(int)$this->index]["name"];
        $this->status = $data["components"][(int)$this->index]["status"];
        $this->created_at = $data["components"][(int)$this->index]["created_at"];
        $this->updated_at = $data["components"][(int)$this->index]["updated_at"];
        $this->position = $data["components"][(int)$this->index]["position"];
        $this->description = $data["components"][(int)$this->index]["description"];
        $this->showcase = $data["components"][(int)$this->index]["showcase"];
        $this->start_date = $data["components"][(int)$this->index]["start_date"];
        $this->group_id = $data["components"][(int)$this->index]["group_id"];
        $this->page_id = $data["components"][(int)$this->index]["page_id"];
        $this->group = $data["components"][(int)$this->index]["group"];
        $this->only_show_if_degraded = $data["components"][(int)$this->index]["only_show_if_degraded"];
    }
}

class scheduled_maintenances{
    public $index;
    public $id;
    public $name;
    public $created_at;
    public $updated_at;
    public $monitoring_at;
    public $resolved_at;
    public $impact;
    public $shortlink;
    public $started_at;
    public $page_id;
    public $incident_updates;
    public $components;
    public $scheduled_for;
    public $scheduled_until;

    public function __construct($data)
    {
        $this->id = $data["scheduled_maintenances"][(int)$this->index]["id"];
        $this->name = $data["scheduled_maintenances"][(int)$this->index]["name"];
        $this->created_at = $data["scheduled_maintenances"][(int)$this->index]["created_at"];
        $this->updated_at = $data["scheduled_maintenances"][(int)$this->index]["updated_at"];
        $this->monitoring_at = $data["scheduled_maintenances"][(int)$this->index]["monitoring_at"];
        $this->resolved_at = $data["scheduled_maintenances"][(int)$this->index]["resolved_at"];
        $this->impact = $data["scheduled_maintenances"][(int)$this->index]["impact"];
        $this->shortlink = $data["scheduled_maintenances"][(int)$this->index]["shortlink"];
        $this->started_at = $data["scheduled_maintenances"][(int)$this->index]["started_at"];
        $this->page_id = $data["scheduled_maintenances"][(int)$this->index]["page_id"];
        $this->incident_updates = new incident_updates($data);
        $this->components = new components_($data);
        $this->scheduled_for = $data["scheduled_maintenances"][(int)$this->index]["scheduled_for"];
        $this->scheduled_until = $data["scheduled_maintenances"][(int)$this->index]["scheduled_until"];
    }
}

class incident_updates{
    public $index;
    public $index2;
    public $index3;
    public $id;
    public $status;
    public $body;
    public $incident_id;
    public $created_at;
    public $updated_at;
    public $display_at;
    public $affected_components;
    public $deliver_notifications;
    public $custom_tweet;
    public $tweet_id;

    public function __construct($data)
    {
        $this->id = $data["scheduled_maintenances"][(int)$this->index]["incident_updates"][(int)$this->index2]["id"];
        $this->status = $data["scheduled_maintenances"][(int)$this->index]["incident_updates"][(int)$this->index2]["status"];
        $this->body = $data["scheduled_maintenances"][(int)$this->index]["incident_updates"][(int)$this->index2]["body"];
        $this->incident_id = $data["scheduled_maintenances"][(int)$this->index]["incident_updates"][(int)$this->index2]["incident_id"];
        $this->created_at = $data["scheduled_maintenances"][(int)$this->index]["incident_updates"][(int)$this->index2]["created_at"];
        $this->updated_at = $data["scheduled_maintenances"][(int)$this->index]["incident_updates"][(int)$this->index2]["updated_at"];
        $this->display_at = $data["scheduled_maintenances"][(int)$this->index]["incident_updates"][(int)$this->index2]["display_at"];
        $this->affected_components = new affected_components($data);
        $this->deliver_notifications = $data["scheduled_maintenances"][(int)$this->index]["incident_updates"][(int)$this->index2]["deliver_notifications"];
        $this->custom_tweet = $data["scheduled_maintenances"][(int)$this->index]["incident_updates"][(int)$this->index2]["custom_tweet"];
        $this->tweet_id = $data["scheduled_maintenances"][(int)$this->index]["incident_updates"][(int)$this->index2]["tweet_id"];
    }
}

class affected_components{
    public $index;
    public $index2;
    public $index3;
    public $code;
    public $name;
    public $old_status;
    public $new_status;

    public function __construct($data)
    {
        $this->code = $data["scheduled_maintenances"][(int)$this->index]["incident_updates"][(int)$this->index2]["affected_components"][(int)$this->index3]["code"];
        $this->name = $data["scheduled_maintenances"][(int)$this->index]["incident_updates"][(int)$this->index2]["affected_components"][(int)$this->index3]["name"];
        $this->old_status = $data["scheduled_maintenances"][(int)$this->index]["incident_updates"][(int)$this->index2]["affected_components"][(int)$this->index3]["old_status"];
        $this->new_status = $data["scheduled_maintenances"][(int)$this->index]["incident_updates"][(int)$this->index2]["affected_components"][(int)$this->index3]["new_status"];
    }
}

class components_{
    public $index;
    public $index2;
    public $id;
    public $name;
    public $status;
    public $created_at;
    public $updated_at;
    public $position;
    public $description;
    public $showcase;
    public $start_date;
    public $group_id;
    public $page_id;
    public $group;
    public $only_show_if_degraded;

    public function __construct($data)
    {
        $this->id = $data["scheduled_maintenances"][(int)$this->index]["components"][(int)$this->index2]["id"];
        $this->name = $data["scheduled_maintenances"][(int)$this->index]["components"][(int)$this->index2]["name"];
        $this->status = $data["scheduled_maintenances"][(int)$this->index]["components"][(int)$this->index2]["status"];
        $this->created_at = $data["scheduled_maintenances"][(int)$this->index]["components"][(int)$this->index2]["created_at"];
        $this->updated_at = $data["scheduled_maintenances"][(int)$this->index]["components"][(int)$this->index2]["updated_at"];
        $this->position = $data["scheduled_maintenances"][(int)$this->index]["components"][(int)$this->index2]["position"];
        $this->description = $data["scheduled_maintenances"][(int)$this->index]["components"][(int)$this->index2]["description"];
        $this->showcase = $data["scheduled_maintenances"][(int)$this->index]["components"][(int)$this->index2]["showcase"];
        $this->start_date = $data["scheduled_maintenances"][(int)$this->index]["components"][(int)$this->index2]["start_date"];
        $this->group_id = $data["scheduled_maintenances"][(int)$this->index]["components"][(int)$this->index2]["group_id"];
        $this->page_id = $data["scheduled_maintenances"][(int)$this->index]["components"][(int)$this->index2]["page_id"];
        $this->group = $data["scheduled_maintenances"][(int)$this->index]["components"][(int)$this->index2]["group"];
        $this->only_show_if_degraded = $data["scheduled_maintenances"][(int)$this->index]["components"][(int)$this->index2]["only_show_if_degraded"];
    }
}

class status{
    public $indicator;
    public $description;

    public function __construct($data)
    {
        $this->indicator = $data["status"]["indicator"];
        $this->description = $data["status"]["description"];
    }
}