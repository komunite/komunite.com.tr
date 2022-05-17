export default function JoinFormOrganism({ children, className = "", ...props }) {
    return (<div className="flex flex-col gap-y-7.5">
    <div className="grid md:grid-cols-2 gap-y-7.5 md:flex-row md:gap-x-7.5">
        <div className="floating-wrapper">
            <input type="text" className="floating-input" placeholder="Adınız *" />
            <label>Adınız *</label>
        </div>
        <div className="floating-wrapper">
            <input type="text" className="floating-input" placeholder="Soyadınız *" />
            <label>Soyadınız *</label>
        </div>
    </div>
    <div className="floating-wrapper">
        <input type="email" className="floating-input" placeholder="E-posta adresiniz" />
        <label>E-posta adresiniz</label>
    </div>
    <a href="{{route('privacy-policy')}title="Gizlilik Politikası" className="inline-block">Gizlilik politikamızı gözden geçirmek için tıklayın</a>
    <a data-formkit-toggle="d1e7ad420a" href="https://komunite.ck.page/d1e7ad420a" aria-label="Hemen Katılın" className="self-start inline-block bg-almost-black text-bright uppercase whitespace-nowrap rounded-lg text-center font-bold text-xl md:text-2xl xl:text-3xl py-3.5 px-7.5 lg:py-5 lg:px-10">Hemen Katılın</a>
</div >
    )
}
