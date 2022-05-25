package com.BackEndProJect.BackEndProJect.model;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;

@Entity
@Table(name = "p_event")
public class PEventModel {

	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	private int Pre_ID;

	@Column(name = "Status_Code")
	private String statuscode;

	@Column(name = "Type_Name")
	private String typename;

	public int getPre_ID() {
		return Pre_ID;
	}

	public void setPre_ID(int pre_ID) {
		Pre_ID = pre_ID;
	}

	public String getStatuscode() {
		return statuscode;
	}

	public void setStatuscode(String statuscode) {
		this.statuscode = statuscode;
	}

	public String getTypename() {
		return typename;
	}

	public void setTypename(String typename) {
		this.typename = typename;
	}

	public PEventModel(int pre_ID, String statuscode, String typename) {
		super();
		Pre_ID = pre_ID;
		this.statuscode = statuscode;
		this.typename = typename;
	}

	public PEventModel() {
		super();
	}

}
