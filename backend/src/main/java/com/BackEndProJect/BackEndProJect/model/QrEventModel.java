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
@Table(name="qr_event")
public class QrEventModel {

	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY )
	private int Qrcode_ID;
	
//	@Column(name="User_ID ")
	@JoinColumn(name="User_ID")
	@ManyToOne
	private UserModel userid;
	
	
//	@Column(name="Event_ID")
	@JoinColumn(name="Event_ID")
	@ManyToOne
	private EventModel eventid;
	
	@Column(name="Qrcode_Status")
	private String qrcodestatus;
	
	@Column(name="Qrcode_Path")
	private String qrcodepath;
	
	@Column(name="Qrcode_Event_Status")
	private byte qrcodeeventstatus;

	public int getQrcode_ID() {
		return Qrcode_ID;
	}

	public void setQrcode_ID(int qrcode_ID) {
		Qrcode_ID = qrcode_ID;
	}

	public UserModel getUserid() {
		return userid;
	}

	public void setUserid(UserModel userid) {
		this.userid = userid;
	}

	public EventModel getEventid() {
		return eventid;
	}

	public void setEventid(EventModel eventid) {
		this.eventid = eventid;
	}

	public String getQrcodestatus() {
		return qrcodestatus;
	}

	public void setQrcodestatus(String qrcodestatus) {
		this.qrcodestatus = qrcodestatus;
	}

	public String getQrcodepath() {
		return qrcodepath;
	}

	public void setQrcodepath(String qrcodepath) {
		this.qrcodepath = qrcodepath;
	}

	public byte getQrcodeeventstatus() {
		return qrcodeeventstatus;
	}

	public void setQrcodeeventstatus(byte qrcodeeventstatus) {
		this.qrcodeeventstatus = qrcodeeventstatus;
	}

	public QrEventModel(int qrcode_ID, UserModel userid, EventModel eventid, String qrcodestatus, String qrcodepath,
			byte qrcodeeventstatus) {
		super();
		Qrcode_ID = qrcode_ID;
		this.userid = userid;
		this.eventid = eventid;
		this.qrcodestatus = qrcodestatus;
		this.qrcodepath = qrcodepath;
		this.qrcodeeventstatus = qrcodeeventstatus;
	}

	public QrEventModel() {
		super();
	}
	
	
	
}
