package com.BackEndProJect.BackEndProJect.service;

import java.util.List;
import org.springframework.stereotype.Service;
import com.BackEndProJect.BackEndProJect.model.CommentModel;
import com.BackEndProJect.BackEndProJect.model.EventModel;
import com.BackEndProJect.BackEndProJect.model.PEventModel;
import com.BackEndProJect.BackEndProJect.model.ProvinceModel;
import com.BackEndProJect.BackEndProJect.model.QrEventModel;
import com.BackEndProJect.BackEndProJect.model.UserModel;

@Service
public interface service {

	public List<UserModel> showuser();

	public List<EventModel> showevent();

	public List<CommentModel> showcomment();

	public List<QrEventModel> showqrcode();

	public List<PEventModel> showpevent();

	public List<ProvinceModel> showprovince();

	public void insert(EventModel eventid);

	public void insertUser(UserModel datauser);

	public void insertComment(CommentModel datacomment);

	public List<UserModel> loig(UserModel Data);

	public List<EventModel> eventid(int Data);

	public void insertQrid(QrEventModel Qrid);

	public List<QrEventModel> getqr(QrEventModel DataQr);

	public List<QrEventModel> updateQr(QrEventModel DataQr);

	public List<UserModel> updateProfile(UserModel PathimgUser);

	public List<EventModel> updateImgEvent(EventModel DataEvent);

	public List<EventModel> deleteEvent(EventModel idevent);

	public List<UserModel> deleteuser(UserModel iduser);

	public List<QrEventModel> getidqrcode(QrEventModel iduser);

	public List<QrEventModel> editstatusqrevent(QrEventModel idQRcode);

	public List<EventModel> getEventByid(EventModel iduser);

	// public List<EventModel> getIDQRCODE(EventModel iduser);


}
