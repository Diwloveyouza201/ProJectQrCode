package com.BackEndProJect.BackEndProJect.repository;

import java.util.List;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.stereotype.Repository;

import com.BackEndProJect.BackEndProJect.model.EventModel;
import com.BackEndProJect.BackEndProJect.model.QrEventModel;
import com.BackEndProJect.BackEndProJect.model.UserModel;

@Repository
public interface QrEventRepository extends JpaRepository<QrEventModel, Integer>{

	@Query(value = "SELECT c FROM QrEventModel c WHERE User_ID = ?1 and event_id = ?2")
	public List<QrEventModel> fintByQrCode(int getUser_ID, int getEvent_id );
	
//	@Query(value = "UPDATE  c. FROM QrEventModel c WHERE User_ID = ?1 and event_id = ?2")
//	public List<QrEventModel> fintByUpdateQrCode(int getUser_ID, int getEvent_id );
}
