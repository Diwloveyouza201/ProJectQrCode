package com.BackEndProJect.BackEndProJect.model;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;

@Entity
@Table(name="user")
public class UserModel {

	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	private int User_ID;
	
	@Column(name="Username")
	private String username;
	
	@Column(name="Password")
	private String password;
	
	@Column(name="Email")
	private String email;
	
	@Column(name="Name")
	private String name;
	
	@Column(name="nick_name")
	private String nickname;
	
	@Column(name="Gender")
	private String gender;
	
	@Column(name="Age")
	private String age;
	
	@Column(name="Phone")
	private String phone;
	
	@Column(name="Line_ID")
	private String lineid;
	
	@Column(name="Image_Profile")
	private String imageprofile;
	
	@Column(name="Admin_user")
	private byte adminuser;

	public int getUser_ID() {
		return User_ID;
	}

	public void setUser_ID(int user_ID) {
		User_ID = user_ID;
	}

	public String getUsername() {
		return username;
	}

	public void setUsername(String username) {
		this.username = username;
	}

	public String getPassword() {
		return password;
	}

	public void setPassword(String password) {
		this.password = password;
	}

	public String getEmail() {
		return email;
	}

	public void setEmail(String email) {
		this.email = email;
	}

	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}

	public String getNickname() {
		return nickname;
	}

	public void setNickname(String nickname) {
		this.nickname = nickname;
	}

	public String getGender() {
		return gender;
	}

	public void setGender(String gender) {
		this.gender = gender;
	}

	public String getAge() {
		return age;
	}

	public void setAge(String age) {
		this.age = age;
	}

	public String getPhone() {
		return phone;
	}

	public void setPhone(String phone) {
		this.phone = phone;
	}

	public String getLineid() {
		return lineid;
	}

	public void setLineid(String lineid) {
		this.lineid = lineid;
	}

	public String getImageprofile() {
		return imageprofile;
	}

	public void setImageprofile(String imageprofile) {
		this.imageprofile = imageprofile;
	}

	public byte getAdminuser() {
		return adminuser;
	}

	public void setAdminuser(byte adminuser) {
		this.adminuser = adminuser;
	}

	public UserModel(int user_ID, String username, String password, String email, String name, String nickname,
			String gender, String age, String phone, String lineid, String imageprofile, byte adminuser) {
		super();
		User_ID = user_ID;
		this.username = username;
		this.password = password;
		this.email = email;
		this.name = name;
		this.nickname = nickname;
		this.gender = gender;
		this.age = age;
		this.phone = phone;
		this.lineid = lineid;
		this.imageprofile = imageprofile;
		this.adminuser = adminuser;
	}

	public UserModel() {
		super();
	}

	
	
}
