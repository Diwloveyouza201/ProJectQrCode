package com.BackEndProJect.BackEndProJect.service;

import java.util.List;


import org.apache.logging.log4j.LogManager;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import org.apache.logging.log4j.Logger;
import com.BackEndProJect.BackEndProJect.model.CommentModel;
import com.BackEndProJect.BackEndProJect.model.EventModel;

import com.BackEndProJect.BackEndProJect.model.PEventModel;
import com.BackEndProJect.BackEndProJect.model.ProvinceModel;
import com.BackEndProJect.BackEndProJect.model.QrEventModel;
import com.BackEndProJect.BackEndProJect.model.UserModel;

import com.BackEndProJect.BackEndProJect.repository.CommentRepository;
import com.BackEndProJect.BackEndProJect.repository.EventRepository;

import com.BackEndProJect.BackEndProJect.repository.PEventRepository;
import com.BackEndProJect.BackEndProJect.repository.ProvinceRepository;
import com.BackEndProJect.BackEndProJect.repository.QrEventRepository;
import com.BackEndProJect.BackEndProJect.repository.UserRepository;

@Service
public class serviceImp implements service {

	private final Logger logger = LogManager.getLogger(this.getClass());

	@Autowired
	private UserRepository userRepository;

	@Autowired
	private EventRepository eventRepository;

	@Autowired
	private CommentRepository commentRepository;

	@Autowired
	private QrEventRepository qrEventRepository;

	@Autowired
	private PEventRepository pEventRepository;

	@Autowired
	private ProvinceRepository provinceRepository;

	@Override
	public List<UserModel> showuser() {
		// TODO Auto-generated method stub
		return userRepository.findAll();
	}

	@Override
	public List<EventModel> showevent() {
		// TODO Auto-generated method stub
		return eventRepository.findAll();
	}

	@Override
	public List<CommentModel> showcomment() {
		// TODO Auto-generated method stub
		return commentRepository.findAll();
	}

	@Override
	public List<QrEventModel> showqrcode() {
		// TODO Auto-generated method stub
		return qrEventRepository.findAll();
	}

	@Override
	public List<PEventModel> showpevent() {
		// TODO Auto-generated method stub
		return pEventRepository.findAll();
	}

	@Override
	public List<ProvinceModel> showprovince() {
		// TODO Auto-generated method stub
		return provinceRepository.findAll();
	}

	@Override
	public void insert(EventModel eventid) {

		eventRepository.save(eventid);

	}

	@Override
	public List<UserModel> loig(UserModel Data) {
		// TODO Auto-generated method stub

		return userRepository.fintByUser(Data.getUsername(), Data.getPassword());

	}

	@Override
	public List<EventModel> eventid(int Data) {
		// TODO Auto-generated method stub
		return eventRepository.findAll();
	}

	@Override
	public void insertQrid(QrEventModel Qrid) {
		qrEventRepository.save(Qrid);

	}

	@Override
	public List<QrEventModel> getqr(QrEventModel DataQr) {
		// TODO Auto-generated method stub
		logger.info("user {} {}", DataQr.getUserid().getUser_ID(), DataQr.getEventid().getEvent_id());
		return qrEventRepository.fintByQrCode(DataQr.getUserid().getUser_ID(), DataQr.getEventid().getEvent_id());
	}

	@Override
	public List<QrEventModel> updateQr(QrEventModel DataQr) {
		QrEventModel data = qrEventRepository.getOne(DataQr.getQrcode_ID());
		logger.info("data {} ", data.getQrcode_ID());

		data.setQrcodepath(DataQr.getQrcodepath());
		qrEventRepository.save(data);
		return null;
	}

	@Override
	public List<UserModel> updateProfile(UserModel PathimgUser) {
		UserModel data = userRepository.getOne(PathimgUser.getUser_ID());
		logger.info("data {} ", data.getUser_ID());

		data.setEmail(PathimgUser.getEmail());
		data.setName(PathimgUser.getName());
		data.setNickname(PathimgUser.getNickname());
		data.setGender(PathimgUser.getGender());
		data.setAge(PathimgUser.getAge());
		data.setPhone(PathimgUser.getPhone());
		data.setLineid(PathimgUser.getLineid());
		data.setImguser(PathimgUser.getImguser());
		data.setImguser(PathimgUser.getImguser());
		userRepository.save(data);
		// TODO Auto-generated method stub
		return null;
	}

	@Override
	public List<EventModel> deleteEvent(EventModel idevent) {
		eventRepository.delete(idevent);
		return null;
	}

	@Override
	public List<UserModel> deleteuser(UserModel iduser) {
		UserModel data = userRepository.getOne(iduser.getUser_ID());

		data.setUserstatus(iduser.getUserstatus());
		userRepository.save(data);
		// TODO Auto-generated method stub
		return null;
	}

	@Override
	public void insertUser(UserModel datauser) {

		userRepository.save(datauser);
		// TODO Auto-generated method stub

	}

	@Override
	public List<EventModel> updateImgEvent(EventModel DataEvent) {
		EventModel data = eventRepository.getOne(DataEvent.getEvent_id());
		data.setEventimage(DataEvent.getEventimage());
		data.setEventname(DataEvent.getEventname());
		data.setEventpeople(DataEvent.getEventpeople());
		data.setEventparticulars(DataEvent.getEventparticulars());
		data.setEventprovince(DataEvent.getEventprovince());
		data.setEventlocation(DataEvent.getEventlocation());
		data.setEventdate(DataEvent.getEventdate());
		data.setEventdateend(DataEvent.getEventdateend());
		data.setEventtime(DataEvent.getEventtime());
		data.setEventtimeend(DataEvent.getEventtimeend());

		// eventRepository.save(data);
		eventRepository.save(data);
		// TODO Auto-generated method stub
		return null;
	}

	@Override
	public void insertComment(CommentModel datacomment) {
		commentRepository.save(datacomment);
		// TODO Auto-generated method stub

	}

	@Override
	public List<QrEventModel> getidqrcode(QrEventModel iduser) {
		// TODO Auto-generated method stub
		return qrEventRepository.getidqr(iduser.getQrcode_ID());
	}

	@Override
	public List<QrEventModel> editstatusqrevent(QrEventModel idQRcode) {
		// UserModel data = userRepository.getOne(iduser.getUser_ID());
		QrEventModel data = qrEventRepository.getOne(idQRcode.getQrcode_ID());
		data.setQrcodeeventstatus(idQRcode.getQrcodeeventstatus());
		qrEventRepository.save(data);
		// TODO Auto-generated method stub
		return null;
	}

	@Override
	public List<EventModel> getEventByid(EventModel iduser) {
		// TODO Auto-generated method stub
		return eventRepository.getidqr(iduser.getEvent_id());
	}


	

}
