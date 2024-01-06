const BottomMenuComponent = () => {
  return (
    <section>
          <div className="section full mt-4">
            <div className="section-title">Action Button Large</div>
            <div className="appBottomMenu" style="position: relative; z-index: 0; padding-bottom: 0;">
                <a href="#" className="item active">
                    <div className="col">
                        <ion-icon name="pulse-outline"></ion-icon>
                        <strong>Item 1</strong>
                    </div>
                </a>
                <a href="#" className="item">
                    <div className="col">
                        <ion-icon name="card-outline"></ion-icon>
                        <strong>Item 2</strong>
                    </div>
                </a>
                <a href="#" className="item">
                    <div className="col">
                        <div className="action-button large">
                            <ion-icon name="arrow-up-outline"></ion-icon>
                        </div>
                    </div>
                </a>
                <a href="#" className="item">
                    <div className="col">
                        <ion-icon name="calendar-outline"></ion-icon>
                        <strong>Item 4</strong>
                    </div>
                </a>
                <a href="#" className="item">
                    <div className="col">
                        <ion-icon name="settings-outline"></ion-icon>
                        <strong>Item 5</strong>
                    </div>
                </a>
            </div>
        </div>
    </section>
  )
}

export default BottomMenuComponent