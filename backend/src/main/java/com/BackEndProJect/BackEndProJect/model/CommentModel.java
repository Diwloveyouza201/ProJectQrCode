package com.BackEndProJect.BackEndProJect.model;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.Table;

@Entity
@Table(name = "comment")
public class CommentModel {

	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	private int Comment_ID;

	@Column(name = "Comment_Data")
	private String commentdata;

	// @Column(name="User_ID ")
	@JoinColumn(name = "User_ID")
	@ManyToOne
	private UserModel userid;

	// @Column(name="Event_ID ")
	@JoinColumn(name = "Event_ID")
	@ManyToOne
	private EventModel eventid;

	@Column(name = "Comment_Date")
	private String commentdate;

	public CommentModel() {
	}

	public CommentModel(int comment_ID, String commentdata, UserModel userid, EventModel eventid, String commentdate) {
		Comment_ID = comment_ID;
		this.commentdata = commentdata;
		this.userid = userid;
		this.eventid = eventid;
		this.commentdate = commentdate;
	}

	public int getComment_ID() {
		return Comment_ID;
	}

	public void setComment_ID(int comment_ID) {
		Comment_ID = comment_ID;
	}

	public String getCommentdata() {
		return commentdata;
	}

	public void setCommentdata(String commentdata) {
		this.commentdata = commentdata;
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

	public String getCommentdate() {
		return commentdate;
	}

	public void setCommentdate(String commentdate) {
		this.commentdate = commentdate;
	}

}
