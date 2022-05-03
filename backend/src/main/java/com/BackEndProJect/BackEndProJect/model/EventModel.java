package com.BackEndProJect.BackEndProJect.model;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.OneToMany;
import javax.persistence.Table;

@Entity
@Table(name="event")
public class EventModel {
	
	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	private int event_id;
	
//	@Column(name="User_ID")
	@JoinColumn(name="User_ID")
	@ManyToOne
	private UserModel userid;
	
	@JoinColumn(name="Pre_ID ")
	@ManyToOne
	private ProvinceModel provinceModel;
	
	@JoinColumn(name="Pevent_ID ")
	@ManyToOne
	private PEventModel pEventModel;
	
	@Column(name="Event_Name")
	private String eventname;
	
	@Column(name="Event_People")
	private int eventpeople;
	
	@Column(name="Event_Particulars")
	private String eventparticulars;
	
	@Column(name="Event_Province")
	private String eventprovince;
	
	@Column(name="Event_Location")
	private String eventlocation;
	
	@Column(name="Event_Date")
	private String eventdate;
	
	@Column(name="Event_Date_End")
	private String eventdateend;
	
	@Column(name="Event_Time")
	private String eventtime;
	
	@Column(name="	Event_Time_End")
	private String eventtimeend;
	
	@Column(name="Event_Image")
	private String eventimage;
	
	@Column(name="Event_Type")
	private String evenrtype;
	
	@Column(name="Event_Status")
	private byte eventstatus;
	
	@Column(name="Event_Delet")
	private byte  eventdelet;

	public int getEvent_id() {
		return event_id;
	}

	public void setEvent_id(int event_id) {
		this.event_id = event_id;
	}

	public UserModel getUserid() {
		return userid;
	}

	public void setUserid(UserModel userid) {
		this.userid = userid;
	}

	public ProvinceModel getProvinceModel() {
		return provinceModel;
	}

	public void setProvinceModel(ProvinceModel provinceModel) {
		this.provinceModel = provinceModel;
	}

	public PEventModel getpEventModel() {
		return pEventModel;
	}

	public void setpEventModel(PEventModel pEventModel) {
		this.pEventModel = pEventModel;
	}

	public String getEventname() {
		return eventname;
	}

	public void setEventname(String eventname) {
		this.eventname = eventname;
	}

	public int getEventpeople() {
		return eventpeople;
	}

	public void setEventpeople(int eventpeople) {
		this.eventpeople = eventpeople;
	}

	public String getEventparticulars() {
		return eventparticulars;
	}

	public void setEventparticulars(String eventparticulars) {
		this.eventparticulars = eventparticulars;
	}

	public String getEventprovince() {
		return eventprovince;
	}

	public void setEventprovince(String eventprovince) {
		this.eventprovince = eventprovince;
	}

	public String getEventlocation() {
		return eventlocation;
	}

	public void setEventlocation(String eventlocation) {
		this.eventlocation = eventlocation;
	}

	public String getEventdate() {
		return eventdate;
	}

	public void setEventdate(String eventdate) {
		this.eventdate = eventdate;
	}

	public String getEventdateend() {
		return eventdateend;
	}

	public void setEventdateend(String eventdateend) {
		this.eventdateend = eventdateend;
	}

	public String getEventtime() {
		return eventtime;
	}

	public void setEventtime(String eventtime) {
		this.eventtime = eventtime;
	}

	public String getEventtimeend() {
		return eventtimeend;
	}

	public void setEventtimeend(String eventtimeend) {
		this.eventtimeend = eventtimeend;
	}

	public String getEventimage() {
		return eventimage;
	}

	public void setEventimage(String eventimage) {
		this.eventimage = eventimage;
	}

	public String getEvenrtype() {
		return evenrtype;
	}

	public void setEvenrtype(String evenrtype) {
		this.evenrtype = evenrtype;
	}

	public byte getEventstatus() {
		return eventstatus;
	}

	public void setEventstatus(byte eventstatus) {
		this.eventstatus = eventstatus;
	}

	public byte getEventdelet() {
		return eventdelet;
	}

	public void setEventdelet(byte eventdelet) {
		this.eventdelet = eventdelet;
	}

	public EventModel(int event_id, UserModel userid, ProvinceModel provinceModel, PEventModel pEventModel,
			String eventname, int eventpeople, String eventparticulars, String eventprovince, String eventlocation,
			String eventdate, String eventdateend, String eventtime, String eventtimeend, String eventimage,
			String evenrtype, byte eventstatus, byte eventdelet) {
		super();
		this.event_id = event_id;
		this.userid = userid;
		this.provinceModel = provinceModel;
		this.pEventModel = pEventModel;
		this.eventname = eventname;
		this.eventpeople = eventpeople;
		this.eventparticulars = eventparticulars;
		this.eventprovince = eventprovince;
		this.eventlocation = eventlocation;
		this.eventdate = eventdate;
		this.eventdateend = eventdateend;
		this.eventtime = eventtime;
		this.eventtimeend = eventtimeend;
		this.eventimage = eventimage;
		this.evenrtype = evenrtype;
		this.eventstatus = eventstatus;
		this.eventdelet = eventdelet;
	}

	public EventModel() {
		super();
	}

	

}

	